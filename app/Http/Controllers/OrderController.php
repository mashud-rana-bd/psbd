<?php

namespace App\Http\Controllers;
use File;
use App\Category;
use App\Image;
use App\Order;
use App\User;

use Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function placeOrderSubmit(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            dd($request);
            //echo"<pre>";print_r($data);die;
            //$serializeData = serialize();

            $orderData = $request->input('category');
            $backgroundData = $request->input('background');
            $arrCategoyname = implode(" ", $orderData);
            $arrbackgroundname = implode(" ", $backgroundData);
            $order = new Order;
            $order->category_name = $arrCategoyname;
            $order->background_options = $arrbackgroundname;
            $order->instructions_message = $data['description'];
            $order->return_file_type = $request->input('return_type');
            $order->turnaround_time = $request->input('turn_around_time');
            $order->user_email = Auth::user()->email;
            $order->user_id = Auth::user()->id;
            $order->save();
            
            $destination_path = public_path()."/order_images/".$order->id;
            if (!File::exists($destination_path)) {
                File::makeDirectory($destination_path, 0777, true);
            }
            $image_array = $data["file"];
            $array_length = count($image_array);
            $new_named_array = array();
            
            for ($i = 0; $i < $array_length; $i++) {
                $image = new Image;
                $image_size= $image_array[$i]->getClientSize();
                $image_ext = $image_array[$i]->getClientOriginalExtension();
                $new_image_name = $image_array[$i]->getClientOriginalName();
                $image_array[$i]->move($destination_path, $new_image_name);
                $image->image_size=$image_size;
                $image->image_name=$new_image_name;
                $image->order_id = $order->id;
                $image->save();
            }

            return redirect('/place-order')->with('flash_message_success', 'Order submited');

        }

    }
    public function freeTrialSubmit(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo"<pre>";print_r($data);die;
            //$serializeData = serialize();

            $orderData = $request->input('category');
            $backgroundData = $request->input('background');
            $arrCategoyname = implode(" ", $orderData);
            $arrbackgroundname = implode(" ", $backgroundData);
            $order = new Order;
            $order->category_name = $arrCategoyname;
            $order->background_options = $arrbackgroundname;
            $order->instructions_message = $data['description'];
            $order->return_file_type = $request->input('return_type');
            $order->turnaround_time = $request->input('turn_around_time');
            $order->user_email = Auth::user()->email;
            $order->user_id = Auth::user()->id;
            $order->order_type='free_trial';
            $order->save();
            
            $destination_path = public_path()."/order_images/".$order->id;
            if (!File::exists($destination_path)) {
                File::makeDirectory($destination_path, 0777, true);
            }
            $image_array = $data["file"];
            $array_length = count($image_array);
            $new_named_array = array();
            
            for ($i = 0; $i < $array_length; $i++) {
                $image = new Image;
                $image_size= $image_array[$i]->getClientSize();
                $image_ext = $image_array[$i]->getClientOriginalExtension();
                $new_image_name = $image_array[$i]->getClientOriginalName();
                $image_array[$i]->move($destination_path, $new_image_name);
                $image->image_size=$image_size;
                $image->image_name=$new_image_name;
                $image->order_id = $order->id;
                $image->save();
            }
            return redirect('/free-trial')->with('flash_message_success', 'Order submited');

        }

    }
    public function placeOrder()
    {$categories = Category::get();
        return view('place-order')->with(compact('categories'));
    }
    public function freeTrial()
    {$categories = Category::get();
        return view('free-trial')->with(compact('categories'));
    }
    public function pendingOrders(Request $request)
    {$orders = Order::orderBy('created_at', 'desc')->get();
        //echo"<pre>";print_r($order);die;
        return view('admin.orders.pending_orders')->with(compact('orders'));
    }

    public function workingOrders(Request $request)
    {$orders = Order::orderBy('created_at', 'desc')->get();
        //echo"<pre>";print_r($order);die;
        return view('admin.orders.working_orders')->with(compact('orders'));
    }
    public function completedOrders(Request $request)
    {$orders = Order::orderBy('created_at', 'desc')->get();
        //echo"<pre>";print_r($order);die;
        return view('admin.orders.completed_orders')->with(compact('orders'));
    }
    public function acceptNewOrder($id = null)
    {

        //echo "<pre>"; print_r($data); die;
        $a = 2;
        Order::where(['id' => $id])->update(['status' => $a]);
        return redirect('/admin/pending-orders')->with('flash_message_success', 'Order accepted');

        //$categoryDetails = Category::where(['id'=>$id])->first();
        //return view('admin.categories.edit_category')->with(compact('categoryDetails'));

    }
    public function currentlyWorkingOrder($id = null)
    {

        //echo "<pre>"; print_r($data); die;
        $a = 3;
        Order::where(['id' => $id])->update(['status' => $a]);
        return redirect('/admin/accepted-orders')->with('flash_message_success', 'Order accepted');

        //$categoryDetails = Category::where(['id'=>$id])->first();
        //return view('admin.categories.edit_category')->with(compact('categoryDetails'));

    }
    public function forcompletedOrder($id = null)
    {

        //echo "<pre>"; print_r($data); die;
        $a = 4;
        Order::where(['id' => $id])->update(['status' => $a]);
        return redirect('/admin/working-orders')->with('flash_message_success', 'Order accepted');

        //$categoryDetails = Category::where(['id'=>$id])->first();
        //return view('admin.categories.edit_category')->with(compact('categoryDetails'));

    }
    public function acceptedOrders(Request $request)
    {$orders = Order::get();
        //echo"<pre>";print_r($order);die;
        return view('admin.orders.accepted_orders')->with(compact('orders'));
    }

}
