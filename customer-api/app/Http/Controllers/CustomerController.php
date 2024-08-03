<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // trả về kết quả truy vấn
        $customers = Customer::all();
        return response()->json([
            "status" => "success",
            "customers" => $customers
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // lây dữ liệu từ request
            $customer = Customer::create($request->all());
            return response()->json([
                "status" => "success",
                "message" => "Customer created successfully",
                "customer" => $customer
            ], 201);
        } catch (exception $e) {
           return response()->json([
               "status" => "error",
               "message" => "Failed to create customer",
               "error" => $e->getMessage()
           ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        //tìm 1 id và trả về kết quả truy vấn
        try {
            $customer = Customer::find($id);
            if ($customer) {
                return response()->json([
                    "status" => "success",
                    "customer" => $customer
                ], 200);
            } else {
                return response()->json([
                    "status" => "error",
                    "message" => "Customer not found"
                ], 404);
            }
        } catch (exception $e) {
            return response()->json([
                "status" => "error",
                "message" => "Failed to get customer detail",
                "error" => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //cập dữ liệu từ request vào id
        try {
            $customer = Customer::find($id);
            if(!$customer) {
                return response()->json([
                    "status" => "error",
                    "message" => "Customer not found"
                ], 404);
            }
            // Cập nhật dữ liệu
            $customer->update($request->all());
            return response()->json([
                "status" => "success",
                "message" => "Customer updated successfully",
                "customer" => $customer
            ], 200);
        } catch (exception $e) {
            return response()->json([
                "status" => "error",
                "message" => "Failed to update customer",
                "error" => $e->getMessage()
            ], 500);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $customer = Customer::find($id);
            if (!$customer) {
                return response()->json([
                    "status" => "error",
                    "message" => "Customer not found"
                ], 404);
            }
            $customer->delete();
            return response()->json([
                "status" => "success",
                "message" => "Delete customer successfully"
            ], 202);
        } catch (\Exception $e) {
            return response()->json([
                "status" => "error",
                "message" => $e->getMessage()
            ], 500);
        }
    }
}
