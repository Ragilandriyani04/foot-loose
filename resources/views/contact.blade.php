<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | {{ env('APP_NAME') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

@include('components.navbar')

<section class="bg-gradient-to-b from-teal-400/50 to-white py-20">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">Contact Us</h2>
      <form onsubmit="sendMail(event)" class="space-y-6">
        <div class="space-x-4 w-full flex items-center">
            <div class="flex flex-col items-center space-y-4 w-1/3">
                <div class="w-full">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                    <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5" placeholder="name@flowbite.com" required>
                </div>
                <div class="w-full">
                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 ">Subject</label>
                    <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-teal-500 focus:border-teal-500" placeholder="Let us know how we can help you" required>
                </div>
            </div>
            <div class="flex-1">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Your message</label>
                <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-teal-500 focus:border-teal-500" placeholder="Leave a comment..."></textarea>
            </div>
        </div>
          <button type="submit" class="flex w-full justify-center py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-teal-700 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300">Send message</button>
      </form>
  </div>
</section>

<script>
function sendMail(event) {
    event.preventDefault();
    const email = document.getElementById('email').value;
    const subject = document.getElementById('subject').value;
    const message = document.getElementById('message').value;

    const mailtoLink = `mailto:{{$profile->email}}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(
        `From: ${email}\n\n${message}`
    )}`;

    window.location.href = mailtoLink;
}
</script>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>