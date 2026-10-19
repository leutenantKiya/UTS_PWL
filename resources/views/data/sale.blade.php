<div class="container mt-4">
    <h3>Sale Detail</h3>
    <table class="table">
        <tr><th>Purchase #</th><td>{{ $data->purchase_number }}</td></tr>
        <tr><th>Date</th><td>{{ $data->date_of_purchase }}</td></tr>
        <tr><th>Customer</th><td>{{ $data->customer->first_name }} {{ $data->customer->last_name }}</td></tr>
        <tr><th>Item</th><td>{{ $data->item->item }}</td></tr>
        <tr><th>Company</th><td>{{ $data->item->company->company_name ?? '-' }}</td></tr>
    </table>
    <a href="{{ route('data.sales') }}" class="btn btn-secondary">Back</a>
</div>