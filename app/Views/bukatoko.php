<!DOCTYPE html>
<html>

<head>
    <title>Step Progress Tutorial</title>
    <link rel="stylesheet" href="<?= base_url('stepper/css/steptoko.css') ?>">

</head>

<body>
    <!-- MultiStep Form -->
    <script type="text/javascript" src="<?= base_url() ?>stepper/js/stepper.js"></script>
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <ul class="stepper linear">
                        <div class="container">
                            <ul class="progressbar">
                                <li class="active">
                                    <div data-step-label="Type something" class="step-title waves-effect waves-dark">Step 1</div>
                                    <div class="step-new-content">
                                        <div class="row">
                                            <div class="md-form col-12 ml-auto">
                                                <input id="email-linear" type="email" class="form-control validate" required>
                                                <label for="email-linear">Your e-mail</label>
                                            </div>
                                        </div>
                                        <div class="step-actions">
                                            <button class="waves-effect waves-dark btn btn-sm btn-primary next-step">CONTINUE</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="">
                                    <div class="step-title waves-effect waves-dark">Step 2</div>
                                    <div class="step-new-content">
                                        <div class="row">
                                            <div class="md-form col-12 ml-auto">
                                                <input id="password-linear" type="password" class="form-control validate" required>
                                                <label for="password-linear">Your password</label>
                                            </div>
                                        </div>
                                        <div class="step-actions">
                                            <button class="waves-effect waves-dark btn btn-sm btn-primary next-step">CONTINUE</button>
                                            <button class="waves-effect waves-dark btn btn-sm btn-secondary previous-step">BACK</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="">
                                    <div class="step-title waves-effect waves-dark">Step 3</div>
                                    <div class="step-new-content">
                                        Finish!
                                        <div class="step-actions">
                                            <button class="waves-effect waves-dark btn btn-sm btn-primary m-0 mt-4" type="button">SUBMIT</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </ul>
                </div>
            </div>
        </div>
    </div>


</body>

</html>