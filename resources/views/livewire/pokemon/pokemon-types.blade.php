<div>
    <div class="mb-2">
        @foreach ($types as $type)
        <span class="badge badge-{{ $type['type']['name'] }} me-1">
            {{ ucwords($type['type']['name']) }}
        </span>
        @endforeach
    </div>
</div>

