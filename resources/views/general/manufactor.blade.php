@extends("general_base")
@section("title") Belsen Herbal & Nutraceuticals | Manufacturing Facilities @endsection
@section("style")
<style>
.image_container::before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(50, 50, 50, 0.150);
    z-index: 0;
}
.text_mf{
    color: #18709a;
}
.text_mf_pink{
    color: #e961ff;
}
hr{
    background-color: #18709a;
    height: 1px;
    border-radius: 5px;
    margin-bottom: 0;
    width: 100%;
}
.img_rounded{
    border-radius: 10px;
    border: 2px solid #cfcfcf;
    width: 225px;
    height: 160px;
    background-color: #d1e4e2;
}
</style>
@endsection
@section("content")
<div class="container my-5">
<div class="row">
<div class="col-12">
<div class="card card-body image_container border-0 p-0">
<img src="{{ asset('assets/mf_1.jpg') }}" class="img-fluid">
</div>
<div class="card card-body bg-light border-top-0 border-bottom-0">
<h1 class="text_mf font-weight-bold text-center">Manufacturing Facilities</h1>
<article class="text-dark">
<p>Belsen Pharma Ltd. has a state of the art manufacturing plant at Faridpur, Bangla-desh. The plant has equipped with highly sophisticated & ultra-modern facilitie-sand it starts operation on 18 Nov 2015.The plant is developed by strictly adher-ingall pre-requisite of the regulatory standards of DGDA. Bangladesh and of WHO cGMP.</p>
<p>Belsen Pharma has set quality benchmarks at this state-of-the-art plant through the deployment of the latest and best international technology and a refusal to compromise on quality at any stage of the manufacturing process. By applying the latest technology, it manufactures medicines of wide range of therapeutic classes like antiulcerants, antibiotics. NSAIDs, antipyretics. vitamins & minerals, laxatives. cardiovasculars.cough and cold remedies, antispasmodics, antihista-mines, antifungal, antifibrinolytics, antiemetics, etc. in this plant. Each and every person of the plant is working relentlessly to uphold its world-class quality. The WHO approved cGMP guidelines are strictly followed, in every single steps of operation in the plant and routinely monitored by DGDA.</p>
<p>World class HVAC systems of Belsen Pharma ensures optimum manufacturing environment of the plant. All manufacturing devices are digitally programmed for highest precision. Moreover, it has ultra-modern Fluid Bed Processing unit,Hi-tech Tablet compression Machine, Auto-spray Tablet Coating Machine, Auto feeder Blister machine, Auto encapsulation machines. Auto liquid filling sealing line and Auto PFS filling sealingwithpackaging facility have boosts up Belsen Pharma. These ultra modern Technology are used in Belsen Pharma to manu-facture all dosage forms.</p>
<p class="mb-0">As water is the key component for pharmaceutical products, we have world-class water treatment plant. It also has built-in Effluent Treatment Plant (ETP)which ensures environment-friendly pharmaceutical waste management practices.Belsen Pharma also ensure environment certificate from relevant govt. authority.</p>
</article>
</div>
<div class="card card-body bg-light pt-4">
<div class="row mb-4 mb-md-0">
<div class="col-md-5 d-flex align-items-center">
<hr>
</div>
<div class="col-md-7">
<h1 class="text_mf font-weight-bold">Manufacturing Facilities</h1>
</div>
</div>
<div class="row mb-5">
<div class="col-md-5 text-center mb-4 mb-md-0">
    <img src="{{ asset('assets/mf_2.png') }}" class="img-fluid img_rounded">
</div>
<div class="col-md-7">
    <p class="mb-3">The product range is selected with utmost care and diligence.</p>
    <ul>
        <li>INJECTABLES</li>
        <li>TABLETS</li>
        <li>CAPSULES</li>
        <li>PFS / DPS</li>
        <li>ORAL LIQUID</li>
        <li>VETERINARY (BOLUS/ WSP/Vitamins/Food Supplements)</li>
        <li>NEUTRACEUTICALS</li>
    </ul>
</div>
</div>
<div class="row mb-5">
<div class="col-md-5 text-center mb-4 mb-md-0">
    <img src="{{ asset('assets/mf_3.png') }}" class="img-fluid img_rounded">
</div>
<div class="col-md-7">
    <p class="text_mf_pink mb-2">Alimentary System:</p>
    <small>
        <ol>
            <li>Antacid, Anti-ulcerates</li>
            <li>GIT regulators, Anti-flatulence</li>
            <li>Antispasmodics</li>
            <li>Laxatives andPurgatives</li>
            <li>Anti-diarrhea</li>
            <li>Anti-emetic</li>
        </ol>
    </small>
</div>
</div>
<div class="row mb-5">
<div class="col-md-5 text-center mb-4 mb-md-0">
    <img src="{{ asset('assets/mf_4.png') }}" class="img-fluid img_rounded">
</div>
<div class="col-md-7">
    <p class="text_mf_pink mb-2">Cardiovascular System:</p>
    <small>
        <ol>
            <li>Lipid Loweringdrugs</li>
        </ol>
    </small>
    <p class="text_mf_pink mb-2">Respiratory System:</p>
    <small>
        <ol>
            <li>Anti asthmaticPreparations</li>
            <li>Cough and coidremedies</li>
        </ol>
    </small>
</div>
</div>
<div class="row mb-5">
<div class="col-md-5 text-center mb-4 mb-md-0">
    <img src="{{ asset('assets/mf_5.png') }}" class="img-fluid img_rounded">
</div>
<div class="col-md-7">
    <p class="text_mf_pink mb-2">Neuro-Muscular System:</p>
    <small> 
        <ol>
            <li>Analgesic andAntipyretics</li>
            <li>Anti rheumatic, Anti- inflammatory,Analgesics</li>
            <li>MinorTranquilizers</li>
            <li>Anti emeticdrugs</li>
            <li>Antidepressant</li>
            <li>Musclerelaxants</li>
        </ol>
    </small>
    <p class="text_mf_pink mb-2">Antibiotics:</p>
    <small> 
        <ol>
            <li>Anti bacterialcombinations</li>
            <li>Antifungal</li>
            <li>Quinolones & Fluoroquinolones</li>
            <li>Otherantibiotics</li>
        </ol>
    </small>
</div>
</div>
<div class="row">
<div class="col-md-5 text-center mb-4 mb-md-0">
    <img src="{{ asset('assets/mf_6.jpg') }}" class="img-fluid img_rounded">
</div>
<div class="col-md-7"> 
    <p class="text_mf_pink mb-2">Vitamins and minerals:</p>
    <small> 
        <ol>
            <li>Vitamin B Complex</li>
            <li>Vitamin andCalcium</li>
            <li>Multi Vitamins withMinerals</li>
            <li>Pediatric Vitamins andMinerals</li>
        </ol>
    </small>
    <p class="text_mf_pink mb-2">Allergy and Immune System:</p>
    <small> 
        <ol>
            <li>Antihistamines</li>
            <li>Antiallergies</li>
        </ol>
    </small>
</div>
</div>
</div>
<div class="card card-body bg-light border-top-0 pt-4">
<div class="row mb-4 mb-md-0">
<div class="col-md-5 d-flex align-items-center">
<hr>
</div>
<div class="col-md-7">
<h1 class="text_mf font-weight-bold">Quality Control & <br>Assurance Department</h1>
</div>
</div>
<div class="row">
<div class="col-md-5 text-center mb-4 mb-md-0">
    <div class="row">
    <div class="col-6 col-md-12">
        <img src="{{ asset('assets/mf_7.png') }}" class="img-fluid img_rounded mb-4">
    </div>
    <div class="col-6 col-md-12">
        <img src="{{ asset('assets/mf_8.png') }}" class="img-fluid img_rounded mb-4">
    </div>
    <div class="col-6 col-md-12">
        <img src="{{ asset('assets/mf_9.png') }}" class="img-fluid img_rounded mb-4">
    </div>
    <div class="col-6 col-md-12">
        <img src="{{ asset('assets/mf_10.png') }}" class="img-fluid img_rounded mb-4">
    </div>
    <div class="col-6 col-md-12">
        <img src="{{ asset('assets/mf_11.png') }}" class="img-fluid img_rounded">
    </div>
    </div>
</div>
<div class="col-md-7">
<p>Belsen Pharma has put into place a comprehensive quality policy, which covers raw materials, all stages of product manufacture, as well as packaging and storage and complies with the most exact-ing national and international standards. Strict quality control & assurance procedures are maintained at every step starting from sourcing of raw materials to dispatch of finished products. The WHO approved current Good Manufacturing Practices (cGMP) & current Good Laboratory Practices (cGLP) are followed in every step of operation.</p> 
<p>Stringent quality control and continuous quality checks are a part of every batch and process at Belsen Pharma, in order to ensure the highest process integrity.Written Standard Operating Procedures (SOPs) are maintained for every process, which are being closely monitored to ensure that all concerned personnel are complying with these procedures. All of these quality efforts are part of Belsen Pharma's commitment to ensuring that every product that comes off its production lines meets the most exacting national & interna-tional standards.</p>
<p class="mb-2">Belsen Pharma Plant Quality Control (QC) lab is well equipped with the most modern & sophisticated equipment like as:</p>
<ol>
    <li>High Performance Liquid Chromatography (HPLC)</li>
    <li>Fourier Transform Infrared Spectrophotometer (FTIR)</li>
    <li>UV-Visible Spectrophotometer</li>
    <li>Karl Fischer Titrator</li>
    <li>Refractometer</li>
    <li>Dissolution Tester</li>
    <li>Moisture Analyzer</li>
    <li>Melting Point</li>
    <li>Analytical Balance</li>
    <li>Laminar Air Flow</li>
    <li>Incubator</li>
    <li>Autoclave etc.</li>
</ol>
<p>And many other latest computer aided instruments & accessories to ensure the highest quality products.</p>
<p class="mb-0">The total Quality Assurance activities are accomplished by two departments —Quality Control & Assurance, which are comprised of competent Pharmacists, Chemists, and Biochemists & Microbi-ologists.</p>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection