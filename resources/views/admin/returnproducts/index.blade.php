@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('cruds.return.title') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-ReturnProduct">
                <thead>
                    <tr>
                        <th width="10">
                        </th>
                        <th>
                            {{ trans('cruds.return.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.return.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.return.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.return.fields.order_id') }}
                        </th>
                        <th>
                            {{ trans('cruds.return.fields.product_id') }}
                        </th>
                        <th>
                            {{ trans('cruds.return.fields.created_at') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($returnproducts as $key => $returnproduct)
                        <tr data-entry-id="{{ $returnproduct->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $returnproduct->id ?? '' }}
                            </td>
                            <td>
                                {{ $returnproduct->name ?? '' }}
                            </td>
                            <td>
                                {{ $returnproduct->phone ?? '' }}
                            </td>
                            <td>
                                {{ $returnproduct->order_id ?? '' }}
                            </td>
                            <td>
                                {{ $returnproduct->product_code ?? '' }}
                            </td>
                            <td>
                                {{ $returnproduct->created_at ?? '' }}
                            </td>
                            <td>
                                <a class="btn btn-xs btn-primary"  href="{{ route('admin.returnproducts.show',$returnproduct->id) }}">
                                    {{ trans('global.view') }}
                                </a>
                                <a class="btn btn-xs btn-info" href="#">
                                    {{ trans('global.edit') }}
                                </a>
                                <form action="#" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
<!--
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('code_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.feedback.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Feedback:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection

-->