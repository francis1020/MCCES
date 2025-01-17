            <!--begin::Modal - Offer A Deal-->
            <div class="modal" id="kt_modal_login" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-1000px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Main-->
                <div class="d-flex flex-column flex-root">
                    <!--begin::Authentication - Sign-in -->
                    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-fixed "
                        style="background-image: url(assets/media/img/wave.png">
                        <!--begin::Content-->
                        <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                            <!--begin::Logo-->
                            <a href="demo1/dist/index.html" class="mb-12">
                            <img alt="Logo" src="./icon.png" class="h-125px" />
                            </a>
                            <h1 class="text-dark mb-3">Madridejos Community Colleges</h1>
                            <!--end::Logo-->
                            <!--begin::Wrapper-->
                            <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                                <!--begin::Form-->
                                <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="#">
                                    <!--begin::Heading-->
                                    <div class="text-center mb-10">
                                        <!--begin::Title-->
                                        <h1 class="text-dark mb-3">You must login first to continue</h1>
                                        <!--end::Title-->
                                        <!--begin::Link-->
                                        <div class="text-gray-400 fw-bold fs-4">New Here?
                                            <a href="#"
                                                class="link-primary fw-bolder" data-bs-toggle="modal" data-bs-target="#kt_modal_sign">Create an Account</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    
                                    <!--begin::Actions-->
                                    <div class="text-center">
                                        <!--begin::Submit button-->
                                        <button id="kt_sign_in_submit"
                                            class="btn btn-lg btn-primary w-100 mb-5">
                                         
                                         <span class="indicator-label"><a href="./step/students/index.php">Continue</a></span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Authentication - Sign-in-->
                </div>
                <!--end::Main-->

            </div>
        </div>
    </div>
    <!--end::Modal - Offer A Deal-->
    <!--begin::Modal - Offer A Deal-->
<div class="modal" id="kt_modal_sign" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Main-->
            <div class="d-flex flex-column flex-root">
                <!--begin::Authentication - Sign-in -->
                <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-auto bgi-attachment-fixed"
                    style="background-image: url(assets/media/img/wave.png">
                    <!--begin::Content-->
                    <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                        <!--begin::Logo-->
                        <a href="demo1/dist/index.html" class="mb-12">
                            <img alt="Logo" src="./icon.png" class="h-125px" />
                        </a>
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">Sign Up to Madridejos Community College</h1>
                        <!--end::Title-->
                        <!--end::Logo-->
                        <!--begin::Wrapper-->
                        <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" action="insert_user.php" method="POST">
							<!--begin::Heading-->
							<div class="mb-10 text-center">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">Create an Account</h1>
								<!--end::Title-->
								<!--begin::Link-->
								<div class="text-gray-400 fw-bold fs-4">Already have an account?
								<a href="./././step/students/login/index.php" class="link-primary fw-bolder">Sign in here</a></div>
								<!--end::Link-->
							</div>
							<!--begin::Input group-->
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-7">
								<label class="form-label fw-bolder text-dark fs-6">Email</label>
								<input class="form-control form-control-lg form-control-solid" type="email" placeholder="Ex: jdc.cafe@gmail.com" name="email" autocomplete="off" />
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="mb-10 fv-row" data-kt-password-meter="true">
								<!--begin::Wrapper-->
								<div class="mb-1">
									<!--begin::Label-->
									<label class="form-label fw-bolder text-dark fs-6">Password</label>
									<!--end::Label-->
									<!--begin::Input wrapper-->
									<div class="position-relative mb-3">
										<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password" autocomplete="off" />
										<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
											<i class="bi bi-eye-slash fs-2"></i>
											<i class="bi bi-eye fs-2 d-none"></i>
										</span>
									</div>
									<!--end::Input wrapper-->
									<!--begin::Meter-->
									<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
									</div>
									<!--end::Meter-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Hint-->
								<div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
								<!--end::Hint-->
							</div>
							<!--end::Input group=-->
							<!--begin::Input group-->
							<div class="fv-row mb-5">
								<label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
								<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm-password" autocomplete="off" />
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<label class="form-check form-check-custom form-check-solid form-check-inline">
									<input class="form-check-input" type="checkbox" name="toc" value="1" />
									<span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
									<a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
								</label>
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">
								<button type="button" id="kt_sign_up_submit" class="btn btn-lg btn-primary" >
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Authentication - Sign-in-->
            </div>
            <!--end::Main-->
        </div>
    </div>
</div>
<!--end::Modal - Offer A Deal-->


