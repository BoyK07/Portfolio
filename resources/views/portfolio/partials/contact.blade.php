<section class="bg-[#13152b] text-white py-12 px-4 relative z-10">
	<div class="max-w-xl mx-auto">
		<h2 class="text-3xl font-semibold text-center mb-6">Contact Me</h2>
		<form id="contactForm" class="space-y-6">
			@csrf
			<div>
				<label for="name" class="block text-sm font-medium text-white">Name</label>
				<input type="text" id="name" name="name" autocomplete="off" class="mt-1 block w-full px-3 py-2 border border-gray-700 rounded-md shadow-sm bg-[#25283c] text-white">
			</div>

			<div>
				<label for="email" class="block text-sm font-medium text-white">Email</label>
				<input type="email" id="email" name="email" autocomplete="off" class="mt-1 block w-full px-3 py-2 border border-gray-700 rounded-md shadow-sm bg-[#25283c] text-white">
			</div>

			<div>
				<label for="message" class="block text-sm font-medium text-white">Message</label>
				<textarea id="message" name="message" rows="4" autocomplete="off" class="resize-none mt-1 block w-full px-3 py-2 border border-gray-700 rounded-md shadow-sm bg-[#25283c] text-white"></textarea>
			</div>

			<div>
				<button type="submit" class="w-full py-2 px-4 bg-[#2c2e43] text-white font-semibold rounded-md">Send Message</button>
			</div>
		</form>
	</div>
</section>
@include('components.toast')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');

    // Add submit listener with async
    form.addEventListener('submit', async function (event) {
        event.preventDefault(); // Prevent the default form submission

        const formData = new FormData(form);
        const csrfToken = document.querySelector('input[name="_token"]').value;
        let toastShow;

        try {
            const response = await fetch("{{ route('contact.submit') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json',
                },
                body: formData
            });

            const data = await response.json();

            if (data.status === 'success') {
                // Success toast notification
                toastShow = new CustomEvent('toast-show', { detail: { message: data.message, type: 'success' }});
                // Reset the form
                form.reset();
            } else {
                // Error toast notification
                let errorMessages = Object.values(data.errors).flat().join('<br/>');
                toastShow = new CustomEvent('toast-show', { detail: { message: errorMessages || 'Something went wrong.', type: 'danger' }});
            }
        } catch (error) {
            // General error toast notification
            toastShow = new CustomEvent('toast-show', { detail: { message: 'Something went wrong.', type: 'danger' }});
        }

        // Dispatch the toast event
        window.dispatchEvent(toastShow);
    });
});

</script>
