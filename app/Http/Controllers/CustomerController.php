<?php

namespace App\Http\Controllers;

use App\Repository\CustomerRepositoryInterface;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    private $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository){
        $this->customerRepository = $customerRepository;
    }

    public function index (){
        $customers = $this->customerRepository->all();

        return view('customers',compact('customers'));
    }

    public function show($id){
        $customer = $this->customerRepository->findTheId($id);

        return view('show',compact('customer'));
    }
}
