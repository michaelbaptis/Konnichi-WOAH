<div class="greyy" id="barrier"></div>
    <div class="upper">

        <form action="/questions/cancel" method="post">
            @csrf
            <input type="hidden" name="point_id" value="{{ $point->id }}" id="">
            <button type="submit" class="back-button-out" onclick="confirm('Are you sure you want to cancel? Your progress won\'t be saved')">
                <svg class="back-button" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"> <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /> </svg>
            </button>
        </form>

        <div class="progress" id="process-bar">
            <div class="progress-bar" id="processing" role="progressbar" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="0" style="width: {{ $page->id * 10 }}%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                <div id="process2"></div>
            </div>
        </div>
    </div>

