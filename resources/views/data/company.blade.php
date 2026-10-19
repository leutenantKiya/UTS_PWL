<div class="container mt-4">
    <h3>Company Detail</h3>
    <table class="table">
        <tr><th>Company ID</th><td>{{ $data->company_id }}</td></tr>
        <tr><th>Company Name</th><td>{{ $data->company_name }}</td></tr>
        <tr><th>Phone</th><td>{{ $data->headquarters_phone_number }}</td></tr>
        <tr><th>Items</th><td>
            <ul>
                @foreach($data->items as $item)
                <li>{{ $item->item }} ({{ $item->item_code }}) - Rp {{ number_format($item->unit_price) }}</li>
                @endforeach
            </ul>
        </td></tr>
    </table>
    <a href="{{ route('data.companies') }}" class="btn btn-secondary">Back</a>
</div>