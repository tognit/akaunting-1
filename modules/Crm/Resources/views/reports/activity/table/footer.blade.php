<tfoot>
    <tr class="row rp-border-top-1 font-size-unset px-3">
        <th class="{{ $class->column_name_width  }} text-uppercase">{{ trans_choice('general.totals', 1) }}</th>
        @php $grand_total = 0; @endphp
        @foreach($class->footer_totals[$table] as $total)
            @php $grand_total += $total; @endphp
            <th class="{{ $class->column_value_width  }} text-right px-0">{{ $total }}</th>
        @endforeach
        <th class="{{ $class->column_name_width  }} text-right pl-0 pr-4">{{ $grand_total }}</th>
    </tr>
</tfoot>
