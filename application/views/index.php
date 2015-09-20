<?php if (@$header !== null) {
    @$header;
} ?>

<?php
$alert_message = $this->session->userdata('message');
if ($alert_message !== NULL) {
    ?>

    <div class="container alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <strong><?php
    echo $alert_message;
    $this->session->unset_userdata('message');
    ?>
    </div>
<?php } ?>

<?php if (@$hero_slider !== null) {
    @$hero_slider;
} ?>

<?php if (@$how_its_works !== null) {
    @$how_its_works;
} ?>

<?php if (@$pricing_plan !== null) {
    @$pricing_plan;
} ?>

<?php if (@$checkout !== null) {
    @$checkout;
} ?>

<?php if (@$cart !== null) {
    @$cart;
} ?>

<?php //include("includes/portfolio.php")  ?>

<?php if (@$faq !== null) {
    @$faq;
} ?>

<?php if (@$feedback !== null) {
    @$feedback;
} ?>

<?php if (@$contacts !== null) {
    @$contacts;
} ?>


<?php if (@$footer !== null) {
    @$footer;
} ?>