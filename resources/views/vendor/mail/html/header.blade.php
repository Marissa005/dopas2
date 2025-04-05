@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://marissaeadlinna.duckdns.org/pblogo.png" alt="PB Logo" style="height: 60px;">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
