<x-mail::message>
    <div class="container">
        <h1 class="h3">Contact Form Submission</h1>
        <hr>
        <div class="row">
            <div class="col">
                <h2 class="h5">Name:</h2>
                <p>{{ $contactData['name'] }}</p>
            </div>
            <div class="col">
                <h2 class="h5">Email:</h2>
                <p>{{ $contactData['email'] }}</p>
            </div>
            <div class="col">
                <h2 class="h5">Website:</h2>
                <p>{{ $contactData['website'] }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2 class="h5">Message:</h2>
                <p>{{ $contactData['message'] }}</p>
            </div>
        </div>
        <hr>
        <p class="text-muted">Thanks,<br>Admin</p>
    </div>
</x-mail::message>
