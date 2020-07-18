@extends('layouts.main')

@section('content')
<div class="container">
    <br>
    <div class="card">
        <h5 class="card-header">PerfectMoney</h5>
        <div class="card-body">
            <!-- <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a> -->
            <div class="content align-items-center justify-content-center">
                <form action="https://perfectmoney.is/api/step1.asp" method="POST">
                    <br>
                    <input type="hidden" name="PAYEE_ACCOUNT" value="U20145206">
                    <input type="hidden" name="PAYEE_NAME" value="My company">
                    <input type="hidden" name="PAYMENT_AMOUNT" value="1.99">
                    <input type="hidden" name="PAYMENT_UNITS" value="USD">
                    <input type="hidden" name="STATUS_URL" value="{{ route('perfect.balance.show') }}">
                    <input type="hidden" name="PAYMENT_URL" value="{{ route('perfect.balance.show') }}">
                    <input type="hidden" name="NOPAYMENT_URL" value="{{ route('perfect.balance.show') }}">
                    <input type="hidden" name="BAGGAGE_FIELDS" value="ORDER_NUM CUST_NUM">
                    <input type="hidden" name="ORDER_NUM" value="9801121">
                    <input type="hidden" name="CUST_NUM" value="2067609">
                    <input type="submit" name="PAYMENT_METHOD" value="PerfectMoney account">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
