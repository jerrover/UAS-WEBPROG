@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add New Transaction</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('transactions.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Customer</label>
                            <select name="customer_id" class="form-control" required>
                                <option value="">Select Customer</option>
                                @foreach($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Galon Out</label>
                            <select name="galon_out" class="form-control" id="galon_out_select" required>
                                <option value="">Select Galon Out</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="other">Other</option>
                            </select>
                            <input type="number" name="galon_out_manual" class="form-control mt-2 d-none" id="galon_out_manual" placeholder="Enter Galon Out">
                        </div>
                        <div class="form-group">
                            <label>Galon In</label>
                            <select name="galon_in" class="form-control" id="galon_in_select" required>
                                <option value="">Select Galon In</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="other">Other</option>
                            </select>
                            <input type="number" name="galon_in_manual" class="form-control mt-2 d-none" id="galon_in_manual" placeholder="Enter Galon In">
                        </div>
                        <div class="form-group">
                            <label>Transaction Date</label>
                            <input type="date" name="transaction_date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Total Price</label>
                            <input type="number" name="total_price" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Transaction</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const galonOutSelect = document.getElementById('galon_out_select');
        const galonOutManual = document.getElementById('galon_out_manual');

        const galonInSelect = document.getElementById('galon_in_select');
        const galonInManual = document.getElementById('galon_in_manual');

        galonOutSelect.addEventListener('change', function () {
            if (this.value === 'other') {
                galonOutManual.classList.remove('d-none');
                galonOutManual.required = true;
            } else {
                galonOutManual.classList.add('d-none');
                galonOutManual.required = false;
                galonOutManual.value = '';
            }
        });

        galonInSelect.addEventListener('change', function () {
            if (this.value === 'other') {
                galonInManual.classList.remove('d-none');
                galonInManual.required = true;
            } else {
                galonInManual.classList.add('d-none');
                galonInManual.required = false;
                galonInManual.value = '';
            }
        });
    });
</script>
@endsection
