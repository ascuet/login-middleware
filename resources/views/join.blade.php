<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JOIN</title>
</head>
<body>
	<h2>JOINING</h2>
	<div>
		<table>
			<thead>
				<th>ID</th>
				<th>District</th>
				<th>DIVISION</th>
			</thead>
			<tbody>
				@foreach($shouvik as $s)
				<tr>
					<td>{{ $s->id }}</td>
					<td>{{ $s->district }}</td>
					<td>{{ $s->division }}</td>
				</tr>
				@endforeach
				
			</tbody>
		</table>
	</div>
</body>
</html>