<?php require_once __DIR__ . '/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Udyam Experts Application Form | <?php echo $webTitle; ?></title>
   <meta name="description" content="Apply to become an Udyam Matters Expert and help MSMEs avail various government benefits.">
   <link rel="canonical" href="<?php echo $baseUrl; ?>udyam-matters-experts-registration.php" />
   <link rel="icon" href="/assets/img/favicon-udyam-registration.png" type="image/gif" sizes="16x16">
   <link rel="stylesheet" href="/assets/css/all.css" crossorigin="anonymous"/>
   <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="/assets/css/main.css">
   <script src="/assets/js/jquery.min.js"></script>
   <script src="/assets/js/bootstrap.min.js"></script>
   <meta name="robots" content="index, follow">
   
   <style>
      .fcs-form-container {
         padding: 40px;
      }
      .fcs-bold-text-white {
         font-weight: bold;
         color: var(--base-color);
         text-align: center;
      }
      .fchd {
         background-color: var(--theme-green);
         color: white;
         padding: 10px;
         font-weight: bold;
         margin-bottom: 20px;
         border-radius: 4px;
      }
      .boder-instuct {
         border-left: 2px solid #eaeaea;
         padding-left: 30px;
      }
      .fcs-text-dark {
         color: #333;
         font-size: 14px;
         line-height: 1.6;
      }
      .fcs-submit-button {
         background-color: var(--theme-orange);
         border: none;
         padding: 10px 30px;
         font-weight: bold;
         margin-top: 15px;
      }
      @media (max-width: 991px) {
         .boder-instuct {
            border-left: none;
            padding-left: 15px;
            margin-top: 40px;
         }
      }
   </style>
</head>

<body>
<?php include_once('components/header.php') ?>

<section id="msme-registration">
         <div class="container custom-form-container pt-4">
         <h1 class="text-center">Apply for Udyam Cancellation Online</h1>

        <div class="row mb-5">
            <div class="col-12 col-lg-6">
                <div class="container-fluid fchd text-center" style="font-size:15px">Udyam Experts Application Form</div>

                <form id="main-form" action="#" method="post" enctype="multipart/form-data" autocomplete="off">


                    <div class="form-group txt">
                        <label>APPLICANT NAME <span class="required text-danger">(*)</span></label>
                        <input type="text" class="form-control" name="applicant_name" value="" required="">
                    </div>

                    <div class="form-group txt">
                        <label>MOBILE NUMBER <span class="required text-danger">(*)</span></label>
                        <input type="tel" maxlength="10" minlength="10" class="form-control" name="mobile_number" required="">
                    </div>

                    <div class="form-group txt">
                        <label>EMAIL ID <span class="required text-danger">(*)</span></label>
                        <input type="email" class="form-control" name="email_id" required="">
                    </div>

                    <div class="form-group txt">
                        <label>AREA OF EXPERTIES <span class="required text-danger">(*)</span></label>
                        <select name="consultancy_services" class="form-control" id="consultancy_services" required>
                            <option value="">Select Option</option>
                                <option value="trade_fairs_concessions">Consultancy For Getting Concessions For Attending International Trade Fairs</option>
                                <option value="loan_interest_reduction">Consultancy For Reducing Rate Of Interest On Existing Loans Availed For Their Business</option>
                                <option value="security_deposit_exemption">Consultancy For Availing Benefit Of Exemption From Security Deposit In Government Tenders</option>
                                <option value="electricity_bill_concessions">Consultancy For Getting Concessions Against Electricity Bills</option>
                                <option value="recover_dues">Consultancy To MSME Units To Recover Their Dues From The Clients Who Have Refused To Pay</option>
                                <option value="direct_tax_exemption">Consultancy To Avail Exemptions Under Direct Tax Laws</option>
                                <option value="iso_reimbursement">Consultancy For Getting Reimbursement Of ISO Certification Expenditure</option>
                                <option value="patent_fee_discount">Consultancy For Availing Discount On Patent Fees</option>
                                </select>

                    </div>

                    <div id="opentog"></div>

                    <input type="hidden" class="form-control" name="form_name" value="UDYAM Enquiry">
                    <input type="hidden" class="form-control" name="form_id" value="udyam_enquiry">

                    <button type="submit" class="btn btn-primary fcs-submit-button">Submit Application</button>

                <input type="hidden" name="lets-play_buddy" value="1ZKZBCzMQX/QCFqZFrJZJfURnKeA9EwpuEz689ZFgpWATJmIDj8KswMGtXPHmBAw8uIJdURd6/8zMg6WAKfSDcTkOQgfKqbzAiJP/f6roaCBNfUmefqpDHBB4ky9d0tTKBwKWTx9HImQp/rzIkWROR7xDa+8m4I27BTqM39C4xfii7JLTD+DoLEeiK+VofA+Rv4lGlMizT1W4JOq2/4ZouZ7UD9bnOTfc6Aa1c7cAj5g81OBxnKvSc+p11S0Kxxz"></form>
            </div>

            <div class="col-12 col-lg-6 boder-instuct">
                <h5 class="container-fluid fchd text-center mb-0" style="background-color: var(--theme-orange);">Read the Instruction to Fill Udyam Experts Application Form</h5>
                <div class="form-instructions p-3" style="background: #f9f9f9; border: 1px solid #eee; border-top: none;">
                    <div class="form-group" style="margin-top: 15px;">
                        <label class="fcs-text-dark">Once the above details are submitted on our website, our onboarding team will get in touch with you to facilitate onboarding. The process will take anywhere between 10-15 working days.</label>
                    </div>
                    <div class="form-group" style="margin-top: 25px;">
                        <label class="fcs-text-dark"><strong>Applicant Name :</strong> Applicant are required to enter his / her name as mentioned.</label>
                    </div>

                    <div class="form-group" style="margin-top: 30px;">
                        <label class="fcs-text-dark"><strong>Mobile Number :</strong> Applicant are required to enter his / her Indian mobile number. Do not add +91.</label>
                    </div>

                    <div class="form-group" style="margin-top: 30px;">
                        <label class="fcs-text-dark"><strong>Email Id :</strong> Applicant are required to enter his / her email id.</label>
                    </div>
                </div>
                
                <br>
                <div class="card premium-card mt-3">
                    <div class="card-body p-3">
                        <div class="form-instructions">
                            <div class="form-group m-0">
                                <p class="f12 form-help h5">
                                <br>
                                    <strong>Note</strong> : <a href="<?php echo $baseUrl; ?>"><?php echo $webName; ?></a> is owned and operated by a consultancy firm and We have no relation or we do not represent any government official or government department such as MSME Department, etc.<br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </div>
</section>

<?php include_once('components/disclaimer.php') ?>

<?php include_once('components/footer.php') ?>
</body>
</html>
