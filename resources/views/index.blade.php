<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadoo - Travel Agency</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100 text-gray-900">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <nav class="container mx-auto p-4 flex items-center justify-between">
            <div class="text-2xl font-bold">Jadoo</div>
            <ul class="flex space-x-6">
                <li><a href="#" class="hover:text-blue-500">Destinations</a></li>
                <li><a href="#" class="hover:text-blue-500">Hotels</a></li>
                <li><a href="#" class="hover:text-blue-500">Flights</a></li>
                <li><a href="#" class="hover:text-blue-500">Bookings</a></li>
            </ul>
            <div class="flex space-x-4">
                <a href="#" class="text-blue-500">Login</a>
                <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded">Sign Up</a>
            </div>
        </nav>
        <div class="container mx-auto text-center py-16">
            <h1 class="text-4xl font-bold mb-4">Travel, enjoy and live a new and full life</h1>
            <p class="text-lg mb-6">Built Wicket longer admire do barton vanity itself do in it...</p>
            <div class="space-x-4">
                <a href="#" class="bg-blue-500 text-white px-6 py-3 rounded">Find out more</a>
                <a href="#" class="bg-gray-200 px-6 py-3 rounded">Play Demo</a>
            </div>
        </div>
    </header>

    <!-- Services -->
    <section class="container mx-auto py-16">
        <h2 class="text-3xl font-semibold text-center mb-8">We Offer Best Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white p-6 shadow-md text-center rounded-lg">
                <img src="images/weather-icon.png" alt="Calculated Weather" class="mx-auto mb-4">
                <h3 class="font-bold text-xl">Calculated Weather</h3>
                <p class="text-gray-600">Barton vanity itself do in it...</p>
            </div>
            <div class="bg-white p-6 shadow-md text-center rounded-lg">
                <img src="images/flight-icon.png" alt="Best Flights" class="mx-auto mb-4">
                <h3 class="font-bold text-xl">Best Flights</h3>
                <p class="text-gray-600">Engrossed listening...</p>
            </div>
            <div class="bg-white p-6 shadow-md text-center rounded-lg">
                <img src="images/event-icon.png" alt="Local Events" class="mx-auto mb-4">
                <h3 class="font-bold text-xl">Local Events</h3>
                <p class="text-gray-600">Preferred to men it engrossed...</p>
            </div>
            <div class="bg-white p-6 shadow-md text-center rounded-lg">
                <img src="images/customization-icon.png" alt="Customization" class="mx-auto mb-4">
                <h3 class="font-bold text-xl">Customization</h3>
                <p class="text-gray-600">We deliver outsourced aviation...</p>
            </div>
        </div>
    </section>

    <!-- Destinations -->
    <section class="container mx-auto py-16">
        <h2 class="text-3xl font-semibold text-center mb-8">Top Destinations</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="images/rome.jpg" alt="Rome, Italy" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="font-bold text-xl">Rome, Italy</h3>
                    <p class="text-gray-600">$5.42k - 10 Days Trip</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="images/london.jpg" alt="London, UK" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="font-bold text-xl">London, UK</h3>
                    <p class="text-gray-600">$4.2k - 12 Days Trip</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="images/europe.jpg" alt="Full Europe" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="font-bold text-xl">Full Europe</h3>
                    <p class="text-gray-600">$15k - 28 Days Trip</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Steps -->
    <section class="container mx-auto py-16 bg-gray-50 text-center">
        <h2 class="text-3xl font-semibold mb-8">Book Your Next Trip In 3 Easy Steps</h2>
        <ul class="space-y-4 text-lg text-gray-700">
            <li><span class="font-bold text-xl text-blue-500">1.</span> Choose Destination</li>
            <li><span class="font-bold text-xl text-blue-500">2.</span> Make Payment</li>
            <li><span class="font-bold text-xl text-blue-500">3.</span> Reach Airport on Selected Date</li>
        </ul>
        <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-bold">Trip To Greece</h3>
            <p>14-29 June | by Robin K</p>
            <div class="bg-gray-300 h-2 mt-4">
                <div class="bg-blue-500 h-2" style="width: 40%;"></div>
            </div>
            <p class="text-gray-600 mt-2">24 people going</p>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="container mx-auto py-16">
        <h2 class="text-3xl font-semibold text-center mb-8">What People Say About Us</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <p class="text-gray-700">"On the Windows talking painted pasture yet its express parties use..."</p>
                <h4 class="font-bold text-xl mt-4">Mike Taylor</h4>
                <p class="text-gray-600">Lahore, Pakistan</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <p class="text-gray-700">"Sure last upon he same as knew next. Of believed or diverted no..."</p>
                <h4 class="font-bold text-xl mt-4">Chris Thomas</h4>
                <p class="text-gray-600">CEO of Red Button</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="flex items-center justify-center space-x-4">
                <img src="images/axon.png" alt="Axon" class="h-8">
                <img src="images/jetstar.png" alt="Jetstar" class="h-8">
                <img src="images/expedia.png" alt="Expedia" class="h-8">
                <img src="images/qantas.png" alt="Qantas" class="h-8">
                <img src="images/alitalia.png" alt="Alitalia" class="h-8">
            </div>
            <div class="text-center">
                <h3 class="text-lg font-bold">Subscribe for Updates</h3>
                <form class="mt-4 flex justify-center">
                    <input type="email" class="p-2 rounded-l bg-gray-700 text-white" placeholder="Your email">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-r">Subscribe</button>
                </form>
            </div>
            <div class="text-center">
                <p>&copy; 2024 Jadoo.co | All rights reserved