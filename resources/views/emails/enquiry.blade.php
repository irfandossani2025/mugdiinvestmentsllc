<h1>New website enquiry</h1>@foreach($enquiry as $key=>$value)<p><strong>{{ ucfirst($key) }}:</strong> {!! nl2br(e($value ?: 'Not provided')) !!}</p>@endforeach
