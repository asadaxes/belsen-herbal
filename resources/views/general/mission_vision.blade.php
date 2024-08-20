@extends("general_base")
@section("title") Belsen Herbal & Nutraceuticals | Our Mission & Vision @endsection
@section("style")
<style>
.card{
    border-radius: 0;
}
.image-caption {
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: 1;
    padding-right: 25px;
    padding-left: 25px;
    margin-right: auto;
    margin-left: auto;
}
.image_container::before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(17, 72, 94, 0.5);
    z-index: 0;
}
.bg_mv{
    background-color: #406989;
}
.text_mv{
    color: #f9fbb9;
    font-weight: bold;
}
.img_mv{
    border: 10px solid #a3cce7;
}
</style>
@endsection
@section("content")
<div class="container my-5">
<div class="row">
<div class="col-12">
<div class="card card-body image_container position-relative border-0 p-0">
    <img src="{{ asset('assets/mv_1.jpg') }}" class="img-fluid">
    <h1 class="image-caption text_mv">Cluster Breaking Approach</h1>
</div>
<div class="card card-body bg_mv border-0">

<div class="row mb-5">
    <div class="col-md-6 mb-3">
        <h2 class="text_mv">Vision</h2>
        <p class="text-white">Our vision is to build Belsen Pharma into a world class and leading specialty pharmaceutical company for both human and veterinary drugs. We want to continually grow profits and both share it with partners and reinvest in the business in order to maintain high quali-ty standards and products.</p>
    </div>
    <div class="col-md-6">
        <img src="{{ asset('assets/mv_2.jpg') }}" class="img-fluid img_mv">
    </div>
</div>
<div class="row mb-5">
    <div class="col-md-6 mb-3">
        <img src="{{ asset('assets/mv_3.jpg') }}" class="img-fluid img_mv">
    </div>
    <div class="col-md-6">
        <div class="d-flex justify-content-end">
            <h2 class="text_mv">Mission</h2>
        </div>
        <p class="text-white">Our aim is to provide patients worldwide with better access to high quality, cost-effective medicines in key areas through both existing and future products. We will distinguish ourselves through fast, simple and effective services to customers.</p>
    </div>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        <h2 class="text_mv">Values</h2>
        <ul class="text-white">
            <li>Don't compromise on quality</li>
            <li>Put the needs of the rural population front and center - both humans and animals</li>
            <li>Select, develop and retain talented people and partners</li>
            <li>Keep operations fast and simple</li>
            <li>Strive to be a leader on costs in every important segment</li>
            <li>Treat everyone fairly</li>
            <li>Respect and follow local laws and regulations</li>
            <li>Create a culture of ego-free and humble leadership and positive feelings among colleagues</li>
        </ul>
    </div>
    <div class="col-md-6">
        <img src="{{ asset('assets/mv_4.jpg') }}" class="img-fluid img_mv">
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection