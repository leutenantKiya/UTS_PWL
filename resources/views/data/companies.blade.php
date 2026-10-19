<div class="container mt-4">
    <h3>Companies</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Company ID</th>
                <th>Company Name</th>
                <th>Phone</th>
                <th>Items</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $company)
            <tr>
                <td>{{ $company->company_id }}</td>
                <td>{{ $company->company_name }}</td>
                <td>{{ $company->headquarters_phone_number }}</td>
                <td>
                    <ul class="mb-0">
                        @foreach($company->items as $item)
                        <li>{{ $item->item }} ({{ $item->item_code }})</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>