@extends('layouts.base')
@section('body')

@foreach ($divisions as $division)
{{ $division->division }}
@endforeach

<table border="1">
<tr>
	<th colspan="10">&nbsp;</th>
	<th colspan="3" style="border:1px solid black;border-bottom:none;">Powerplay</th>
	<th colspan="3" style="border:1px solid black;border-bottom:none;">Penalty kill</th>
	<th colspan="4">&nbsp;</th>
</tr>
<tr>
	<th>Position</th>
	<th>Team</th>
	<th>GP</th>
	<th>W</th>
	<th>L</th>
	<th>OTL</th>
	<th>PTS</th>
	<th>GF</th>
	<th>GA</th>
	<th>Diff</th>
	<th style="border-left:1px solid black;" title="Goals">G</th>
	<th title="Opportunities">O</th>
	<th style="border-right:1px solid black;" title="Percent">P</th>
	<th style="border-left:1px solid black;" title="Goals Against">G</th>
	<th title="Opportunities against">O</th>
	<th style="border-right:1px solid black;" title="Penalty Kill Percent">P</th>
	<th>Home</th>
	<th>Away</th>
	<th>L10</th>
	<th>Streak</th>
</tr>
@foreach ($standings as $position => $s)
<tr>
	<td>{{ ++$position }}</td>
	<td>
		<img height="35" src="{{ asset('images/SVG') }}/{{ $s->team->short_name }}.svg" alt="{{ $s->team->city }} {{ $s->team->name }}" />
	</td>
	<td>{{ $s->gp }}</td>
	<td>{{ $s->w }}</td>
	<td>{{ $s->l }}</td>
	<td>{{ $s->otl }}</td>
	<td>{{ $s->pts }}</td>
	<td>{{ $s->gf }}</td>
	<td>{{ $s->ga }}</td>
	<td>{{ $s->diff }}</td>
	<td>{{ $s->ppg }}</td>
	<td>{{ $s->ppo }}</td>
	<td>{{ $s->ppp }}</td>
	<td>{{ $s->ppga }}</td>
	<td>{{ $s->ppoa }}</td>
	<td>{{ $s->pkp }}</td>
	<td>{{ $s->home }}</td>
	<td>{{ $s->away }}</td>
	<td>{{ $s->l10 }}</td>
	<td>{{ $s->streak }}</td>
</tr>
@endforeach
</table>
@stop