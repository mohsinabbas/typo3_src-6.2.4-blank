plugin.tx_felogin_pi1 {
	storagePid = 30

	templateFile = EXT:dp_kickstart_theme/Resources/Private/Templates/ContentElements/FeLogin.html
	feloginBaseURL < config.baseURL

	welcomeHeader_stdWrap.wrap						= <h1>|</h1>
	welcomeMessage_stdWrap.wrap						= <p>|</p>

	successHeader_stdWrap.wrap						= <h1>|</h1>
	successMessage_stdWrap.wrap						= <p>|</p>

	logoutHeader_stdWrap.wrap						= <h1>|</h1>
	logoutMessage_stdWrap.wrap						= <p>|</p>

	errorHeader_stdWrap.wrap						= <h1>|</h1>
	errorMessage_stdWrap.wrap						= <p>|</p>

	forgotHeader_stdWrap.wrap						= <h1>|</h1>
	forgotMessage_stdWrap.wrap						= <p>|</p>
	forgotErrorMessage_stdWrap.wrap					= <p>|</p>
	forgotResetMessageEmailSentMessage_stdWrap.wrap	= <p>|</p>
	changePasswordNotValidMessage_stdWrap.wrap		= <p>|</p>
	changePasswordTooShortMessage_stdWrap.wrap		= <p>|</p>
	changePasswordNotEqualMessage_stdWrap.wrap		= <p>|</p>

	changePasswordHeader_stdWrap.wrap				= <h1>|</h1>
	changePasswordMessage_stdWrap.wrap				= <p>|</p>
	changePasswordDoneMessage_stdWrap.wrap			= <p>|</p>

	email_from = info@vja.ch
	email_fromName = VJA
	replyTo =
}