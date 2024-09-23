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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('contactForm');

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            const formData = new FormData(form);
            const csrfToken = document.querySelector('input[name="_token"]').value;

            fetch("{{ route('contact.submit') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json',
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    Pines.toast({
                        title: 'Success',
                        text: data.message,
                        duration: 3000,
                        position: 'bottom-right',
                        theme: 'success',
                        expanded: true,
                    });

                    form.reset();
                } else {
                    let errorMessage = '';
                    for (let error in data.errors) {
                        errorMessage += data.errors[error][0] + '\n';
                    }

                    Pines.toast({
                        title: 'Error',
                        text: errorMessage,
                        duration: 3000,
                        position: 'bottom-right',
                        theme: 'danger',
                        expanded: true,
                    });
                }
            })
            .catch(error => {
                Pines.toast({
                    title: 'Error',
                    text: 'There was an error submitting the form. Please try again.',
                    duration: 3000,
                    position: 'bottom-right',
                    theme: 'danger',
                    expanded: true,
                });
            });
        });
    });
</script>

