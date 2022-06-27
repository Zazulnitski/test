
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<div id="form-popup">
    <div class="form-body ">
        <div class=" flex-column">
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>

            <div style = 'display:flex'>

                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Your name" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Your email" required>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Your message"></textarea>
                                
                                </div>

                            </div>
                        </div>

                    </form>

                    <div class="text-center text-md-left">
                        <button class="btn btn-primary" onclick="validate_form();">Send</button>
                    </div>
                    <p class="form-status"></p>
                </div>

                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>Sunnyvale, CA 94086, USA</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>+ 01 234 567 89</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>info@upteam.com</p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>