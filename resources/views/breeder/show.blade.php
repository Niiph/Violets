{{ $breeder->name }}

<ul>
    
    @forelse ($breeder->plants->groups as $plant)
        <li>
            {{ $plant['name'] }}
        </li>
    @empty
        No plants found
    @endforelse
</ul>