<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs Page</title>
</head>
<body>
    <x-layout>
        <x-slot:heading>
            Job Listings
        </x-slot:heading>

        <div>
            @foreach ($jobs as $job)
                <a href="/jobs/{{ $job['id'] }}" class="my-3 block border border-gray-300 px-4 py-6 rounded-lg">
                <div class="fnt-bold text-sky-500 text-sm">
                    {{ $job->employer->name}}
                </div>
                <div>
                        <strong>{{ $job['title'] }}</strong>: pays {{ $job['salary'] }}/year
                    </div>
                </a>
            @endforeach

            <div>
                {{ $jobs->links() }}
            </div>
        </div>

    </x-layout>

</body>
</html>
