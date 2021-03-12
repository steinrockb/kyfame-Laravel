<x-app-layout>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {

            $("#startBtn").click(function(){
             
                $("#startBtn").hide();
                $("#section1").show();
            });

            $(".nextBtn").click(function () {
                 var sectionNum = $(this).data("section");
                 $("#section" + sectionNum).hide();
                $("#section" + (sectionNum + 1)).show();
            });
        });
    </script>

    </script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Application') }}
        </h2>
    </x-slot>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <x-auth-validation-errors class="mb-4" :errors="$errors" />


    @if(Session::has('message'))
    <div class="alert alert-info">
        {{Session::get('message')}}
    </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <button id="startBtn">Start new Application</button>


                    <div class="form-section" id="section1" style="display: none" ;>
                        {{-- <form method="POST" action="{{'index.postcontactsection'}}">
                        <input type=\"hidden\" name=\"_method\" value=\"PUT\">"
                        @csrf --}}
                        <div>
                            <div>
                                <x-label for="address" :value="__('Street Address')" />

                                <x-input id="address" class="block mt-1 w-full" type="text" name="address"
                                    :value="old('address')" required autofocus />
                            </div>
                            <div>
                                <x-label for="address2" :value="__('Apt/Suite #')" />

                                <x-input id="address2" class="block mt-1 w-full" type="text" name="address2"
                                    :value="old('address2')" autofocus />
                            </div>
                            <div>
                                <x-label for="city" :value="__('City')" />

                                <x-input id="city" class="block mt-1 w-full" type="text" name="city"
                                    :value="old('city')" required autofocus />
                            </div>
                            <div>
                                <x-label for="state" :value="__('State')" />

                                <x-input id="state" class="block mt-1 w-full" type="text" name="state"
                                    :value="old('state')" required autofocus />
                            </div>
                            <div>
                                <x-label for="zip" :value="__('Zip')" />

                                <x-input id="zip" class="block mt-1 w-full" type="text" name="zip" :value="old('zip')"
                                    required autofocus />
                            </div>
                            <button type="button" class="nextBtn" data-section="1">Next</button>
                        </div>

                        {{-- </form> --}}
                    </div>


                    <!-- Status INFORMATION FORM -->
                    <!-- FORM ROW 1 -->
                    <div class="form-section" id="section2" style="display:none;">
                        Status
                        <form method="POST" action="{{'userApplicaltion.legalStatus.post'}}">
                            @csrf
                            <h2>Legal status </h2>

                            <label for="form-row" class="">Will you be 18 before June 1? </label>

                            <input type="radio" class="section-data" id="over18" name="over18" value="yes" checked>
                            <label class="" for="legal">Yes</label>

                            <input type="radio" class="section-data" id="under18" name="over18" value="No">
                            <label class="" for="over18">No</label>


                        </form>
                        <button type="button" class="nextBtn" data-section="2">Next</button>
                    </div>

                    <!-- Work INFORMATION FORM -->
                    <!-- <h2>Work History</h2> -->
                    <!-- FORM ROW 1 -->
                    <div class="form-section" style="display:none;" id="section3">
                        Work
                        <button class="nextBtn" data-section="3">Next</button>
                    </div>
                    <!-- Assesments INFORMATION FORM -->
                    <!-- <h2>Assesment Information</h2> -->
                    <!-- FORM ROW 1 -->
                    <div class="form-section" id="section4" style="display: none" ;>
                        Assesments
                        <button class="nextBtn" data-section="4">Next</button>
                    </div>
                    <!-- Transcripts -->
                    <!-- FORM ROW 1 -->
                    <div class="form-section" id="section5" style="display:none" ;>
                        Transcripts
                        <button class="nextBtn" data-section="5">Next</button>
                    </div>
                    <!-- Essay -->
                    <!-- FORM ROW 1 -->
                    <div class="form-section" id="section6" style="display:none" ;>
                        Essay
                        <button class="nextBtn" data-section="6">Next</button>
                    </div>
                    <!-- Agreement and submit -->
                    <!-- FORM ROW 1 -->
                    <div class="form-section" id="section7" style="display:none" ;>
                        Terms and Complete
                        <button class="finsih" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



</x-app-layout>