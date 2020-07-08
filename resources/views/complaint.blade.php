@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/custom-css/complaint.css')}}">
@endpush


@section('content')

    <div class="py-5">
        <div class="top mx-0">
        </div>
        <div class="container-fluid px-0 pt-lg-5  pt-md-4 pt-sm-o mx-0">
            <div class="container pt-lg-3  m-lg-auto m-md-auto mx-sm-0 px-sm-0">
                <div class="row pt-lg-5 pb-1 heading align-items-center  mx-0" >
                    <div class="col heading-text text-left ">
                        COMPLAINTS PROCEDURE
                    </div>
                </div>
                <div class="row mx-0 px-0 page-container">
                    <div class="col-12 col-md-12 col-sm-12 m-auto">
                        <div class="page shadow-lg bg-light border rounded mt-5 p-lg-5 p-md-3 p-sm-3">
                            <div class="row justify-content-center py-2">
                                <div class="col page-header-1 text-center">
                                    Complaints Procedure
                                </div>
                            </div>
                            <div class="row justify-content-center px-2 pt-2">
                                <div class="col page-paragraph text-left">
                                    <strong>Please let us know if you have a complaint. At FUNDMYLAPTOP we really strive to provide a high level and quality of customer service but we do realise that mistakes can sometimes happen. In the event that a customer complaint is raised, we will give it our full attention and try our hardest to resolve the matter as soon as we can.</strong>
                                </div>
                            </div>
                            <div class="row justify-content-center px-2 pt-2">
                                <div class="col page-paragraph text-left">
                                    If you feel in any way dissatisfied with the service you have received please do raise it with us. By telling us when you are unhappy it means we have the chance to make amends right there and then and improve the service we offer in future.                            </div>
                            </div>
                            <div class="row justify-content-center px-2 pt-4">
                                <div class="col page-header-2 text-left">
                                    How to raise your complaint
                                </div>
                            </div>
                            <!--                        you would continue from here-->
                            <div class="row justify-content-center px-2 pt-2">
                                <div class="col page-paragraph text-left">
                                    Fill the <a href="../src/complaint-form.html">complaint-form</a> here
                                </div>
                            </div>
                            <div class="row justify-content-center px-2 pt-2">
                                <div class="col page-paragraph text-left">
                                    Also you can visit our office in person or contact us:
                                </div>
                            </div>
                            <div class="row justify-content-center px-2 pt-2">
                                <div class="col page-paragraph text-left">
                                    <strong>Office location:</strong> FUNDMYLAPTOP Limited, Number One, Western Road, Launceston PL15 7FJ </div>
                            </div>
                            <div class="row justify-content-center px-2 pt-2">
                                <div class="col page-paragraph text-left">
                                    <strong>By Telephone:</strong> ask for Customer Service on 01566 773296 </div>
                            </div>
                            <div class="row justify-content-center px-2 pt-2">
                                <div class="col page-paragraph text-left">
                                    <strong>By Email:</strong> complaints@fundmylaptop.com </div>
                            </div>
                            <div class="row justify-content-center px-2 pt-2">
                                <div class="col page-paragraph text-left">
                                    <em>Please ensure you provide your contact details including your telephone number, when you raise your complaint.</em></div>
                            </div>
                            <div class="row justify-content-center px-2 pt-4">
                                <div class="col page-header-2 text-left">
                                    The FUNDMYLAPTOP Promise
                                </div>
                            </div>

                            <div class="row justify-content-center px-2 pt-2">
                                <div class="col page-paragraph text-left">
                                    We promise to do everything we possibly can to resolve your complaint as soon as we receive it, whether it’s face to face with one of our staff, over the phone or in writing. If we need more time to investigate your complaint, we will send you an acknowledgement letter and we will keep you updated on our progress throughout our investigation.                            </div>
                            </div>

                            <div class="row justify-content-center px-2 pt-4">
                                <div class="col page-header-2 text-left">
                                    The Financial Ombudsman Service (FOS)
                                </div>
                            </div>
                            <div class="row justify-content-center px-2 pt-2">
                                <div class="col page-paragraph text-left">
                                    The Financial Ombudsman Service (FOS) is an external body which plays a key role in the complaints process. FOS are an impartial and independent organisation formed to help settle individual disputes between consumers and financial services businesses without taking sides. If we have not been able to resolve your complaint to your satisfaction once we have sent out our final decision, you may be able to refer your complaint to the FOS. They will only investigate your complaint if you have already tried to resolve it with us first or if it has been more than 8 weeks since you first raised your complaint with Folk2Folk                            </div>
                            </div>
                            <div class="row justify-content-center px-2 pt-2">
                                <div class="col page-paragraph text-left">
                                    You can email: complaint.info@financial-ombudsman.org.uk or you can contact them at: Financial Ombudsman Service, South Quay Plaza, 183 Marsh Wall, London E14 9SR Tel. 0800 0234 567 free for people phoning from a ‘fixed line’ (for example, a landline at home) or 0300 123 9 123 free for mobile phone users who pay a monthly charge for calls starting 01 or 02.                            </div>
                            </div>

                            <div class="row justify-content-center px-2 pt-2">
                                <div class="col page-paragraph text-left">
                                    Further details about the Financial Ombudsman Service will be given with our final decision letter.                        </div>

                            </div>
                            <div class="row"></div>
                            <div class="row"></div>
                            <div class="row"></div>
                            <div class="row"></div>
                            <div class="row"></div>
                            <div class="row"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
