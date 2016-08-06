<table id="servers-table" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th class="col-md-4">{{ trans('server/table.hostname') }}</th>
        <th class="col-md-3">{{ trans('server/table.ip_address') }}</th>
        <th class="col-md-1">{{ trans('server/table.type') }}</th>
        <th class="col-md-1">{{ trans('server/table.push_updates') }}</th>
        <th class="col-md-1">{{ trans('server/table.ns_record') }}</th>
        <th class="col-md-2">{{ trans('general.actions') }}</th>
    </tr>
    </thead>
    <tbody>
    @foreach($servers as $server)
        <tr>
            <td>{{ $server->hostname }}</td>
            <td>{{ $server->ip_address }}</td>
            <td>{{ $server->type }}</td>
            <td>{{ $server->push_updates }}</td>
            <td>{{ $server->ns_record }}</td>
            <td>
                @include('partials.actions_dd', ['model' => 'servers', 'id' => $server->id])
            </td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <th class="col-md-4">{{ trans('server/table.hostname') }}</th>
        <th class="col-md-3">{{ trans('server/table.ip_address') }}</th>
        <th class="col-md-1">{{ trans('server/table.type') }}</th>
        <th class="col-md-1">{{ trans('server/table.push_updates') }}</th>
        <th class="col-md-1">{{ trans('server/table.ns_record') }}</th>
        <th class="col-md-2">{{ trans('general.actions') }}</th>
    </tr>
    </tfoot>
</table>