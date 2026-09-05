{{--
    Contact section.
    The form posts nowhere yet (front-end only submit handler in
    app.js) — wire it to a real Laravel route/controller when ready.
    No payment fields are included anywhere in this section.
--}}
@php
    $contactInfo = [
        ['label' => 'Address', 'value' => 'BasicPoint Campus, [Street, Area], [City], Bangladesh'],
        ['label' => 'Phone', 'value' => '+880 1XXX-XXXXXX'],
        ['label' => 'Email', 'value' => 'info@basicpoint.example'],
        ['label' => 'Opening Hours', 'value' => 'Saturday – Thursday, 9:00 AM – 8:00 PM'],
    ];

    $programOptions = ['HSC ICT', 'SSC All Subjects'];
@endphp

<section class="section section--paper" id="contact">
    <div class="container">
        <x-section-heading title="Contact BasicPoint">
            Have a question about admission or a program? Reach out and we'll get back to you.
        </x-section-heading>

        <div class="contact__grid">
            <div>
                <div>
                    @foreach ($contactInfo as $info)
                        <div class="contact__info-item">
                            <div>
                                <strong>{{ $info['label'] }}</strong>
                                <span>{{ $info['value'] }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="contact__map">
                    {{-- Google Maps placeholder — replace the src with the real embed URL --}}
                    <iframe
                        src="https://www.google.com/maps?q=Dhaka,Bangladesh&output=embed"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="BasicPoint location map placeholder">
                    </iframe>
                </div>
            </div>

            <div class="contact__form">
                <div class="form-success" data-form-success>Thank you — your message has been received. We'll be in touch shortly.</div>

                <form data-contact-form>
                    <div class="form-field">
                        <label for="contact-name">Name</label>
                        <input type="text" id="contact-name" name="name" required>
                    </div>
                    <div class="form-field">
                        <label for="contact-phone">Phone</label>
                        <input type="tel" id="contact-phone" name="phone" required>
                    </div>
                    <div class="form-field">
                        <label for="contact-program">Program</label>
                        <select id="contact-program" name="program" required>
                            <option value="" disabled selected>Select a program</option>
                            @foreach ($programOptions as $program)
                                <option value="{{ $program }}">{{ $program }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-field">
                        <label for="contact-message">Message</label>
                        <textarea id="contact-message" name="message" required></textarea>
                    </div>
                    <x-btn type="submit" variant="primary" class="btn--block">Submit</x-btn>
                </form>
            </div>
        </div>
    </div>
</section>
