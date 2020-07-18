<?php
/**
 *
 * @author Charles Patterson <charlesassets@gmail.com>
 *
 */
?>
<form action="https://perfectmoney.is/api/step1.asp" method="POST">
    <input type="hidden" name="PAYEE_ACCOUNT" value="{{ 'U20195706' }}">
    <input type="hidden" name="PAYEE_NAME" value="{{ 'MASCHA' }}">
    <input type="text" name="PAYMENT_AMOUNT" value="{{ '1.00' }}" placeholder="Amount">
    <input type="hidden" name="PAYMENT_UNITS" value="{{ 'USD' }}">
	<input type="hidden" name="PAYMENT_URL" value="{{ route('perfect.balance.show') }}">
	<input type="hidden" name="NOPAYMENT_URL" value="{{ route('perfect.balance.show') }}">
	@if($PAYMENT_ID ?? '')
		<input type="hidden" name="PAYMENT_ID" value="{{ $PAYMENT_ID }}">
	@endif
	@if($STATUS_URL ?? '')
		<input type="hidden" name="STATUS_URL" value="{{ $STATUS_URL }}">
	@endif
	@if($PAYMENT_URL_METHOD ?? '')
		<input type="hidden" name="PAYMENT_URL_METHOD" value="{{ $PAYMENT_URL_METHOD }}">
	@endif
	@if( $NOPAYMENT_URL_METHOD ?? '')
		<input type="hidden" name="NOPAYMENT_URL_METHOD" value="{{ $NOPAYMENT_URL_METHOD }}">
	@endif

	@if( $MEMO ?? '')
		<input type="hidden" name="SUGGESTED_MEMO" value="{{ $MEMO }}">
	@endif
    <input type="submit" value="Proceed">
</form>
