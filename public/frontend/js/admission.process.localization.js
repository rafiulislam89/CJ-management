// Translations
const translations = {
    en: {
        // -----Header-----//
        day:"Mon - Sat: 09:00 am - 05:30 pm",
        date:"Call Us: +088 019163354770",
        email:" Email: Mahabub_madrasa@gmail.com",
        // -----Manu-----//
        manuHome1:"Home",
        manuCurriculum:"Curriculum",
        galleryDescription2:"Nurani Program",
        galleryDescription3:"Nazera Program",
        galleryDescription4:"Hibz Program",
        galleryDescription5:"Sunani Program",
        manuAdmissionProcess:"Admission Process",
        manuAdmissionProcess1:"Admission Notice",
        manuAdmissionProcess2:"Admission Procedure",
        manuAdmissionProcess3:"Admission Terms and Conditions",
        manuAcademic:"Academics",
        manuAcademic1:"Result",
        manuAcademic2:"Exam Notice",
        manuAcademic3:"Holiday Notice",
        manuAcademic4:"Urgent Notice",
        manuAcademic5:"Free Payment",
        manuDirectors:"Directors",
        manuDirectors1:"Teachers",
        manuDirectors2:"institute  Introduction",
        manuDirectors3:"Food Facilities",
        manuMadrasaGallery:"Madrasa Gallery",
        manuContact:"Contact",
        manuAdministration:"Administration",

        // -----Footer-----//
        footerOurService:"Our Service",
        footerOurService1:"Islamic Knowledge",
        footerOurService2:"Way of thinking",
        footerOurService3:"Food Facilities",
        footerOurService4:"Dormitories",
        footerOurService5:"Expert Faculty",
        footerOurService6:"Permanent campus",
        footerOurNewsletter:" Assalamualikum wa Rahmatullahi wa Barakatuhu, " +
            "here is our monthly newsletter for you, which will include the latest updates from the madrasa, events, student progress, and important announcements.",
        footerOurNewsletter1:"Our Newsletter",

        //-----Admission Process-----//


        admissionProcess:"Admission Precess",
        admissionProcessHome:"Home",
    },


    bn: {
        // -----Header-----//
        day:"সোমবার - শনিবার: সকাল ০৯:০০ টা - বিকাল ০৫:৩০ টা",
        date:"যোগাযোগ : +৮৮০ ০১৯১৬৩৫৪৭৭০",
        email:"ইমেইল: Mahabub_madrasa@gmail.com ",
        // -----manu-----//
        manuHome1: "হোমপেজ",
        manuCurriculum:"পাঠ্যক্রম",
        manuCurriculum1:"নূরানী পাঠ্যক্রম",
        manuCurriculum2:"নাজেরা পাঠ্যক্রম ",
        manuCurriculum3:"হিফজ পাঠ্যক্রম",
        manuCurriculum4:"সুনানি পাঠ্যক্রম",

        manuAdmissionProcess:"ভর্তি প্রক্রিয়া",
        manuAdmissionProcess1:"ভর্তি বিজ্ঞপ্তি",
        manuAdmissionProcess2:"ভর্তির পদ্ধতি",
        manuAdmissionProcess3:"ভর্তির নিয়ম ও শর্তাবলী",
        manuAcademic:"একাডেমিক",
        manuAcademic1:"ফলাফল",
        manuAcademic2:"পরীক্ষার নোটিশ",
        manuAcademic3:"ছুটির তালিকা",
        manuAcademic4:"জরুরি নোটিশ",
        manuAcademic5:"ফি প্রদান",
        manuDirectors:"পরিচালক",
        manuDirectors1:"শিক্ষকবৃন্দ",
        manuDirectors2:"প্রতিষ্ঠানের পরিচিতি",
        manuDirectors3:"খাদ্য সুবিধা",
        manuMadrasaGallery:"মাদ্রাসা গ্যালারি",
        manuContact:"যোগাযোগ",
        manuAdministration:"অ্যাডমিন",

        // -----Footer-----//
        footerOurService:"সেবা প্রদান",
        footerOurService1:"ইসলামিক জ্ঞান",
        footerOurService2:"চিন্তাধারার ধরন",
        footerOurService3:"খাদ্য সুবিধা",
        footerOurService4:"আবাসন ব্যবস্থা",
        footerOurService5:"ইসলামিক বিশেষজ্ঞ ",
        footerOurService6:" নিজস্ব ভবন ও অবকাঠামো",
        footerOurNewsletter:"আসসালামু আলাইকুম ওয়া রহমাতুল্লাহি ওয়া বারাকাতুহُ,আপনাদের জন্য আমাদের মাসিক নিউজলেটার যেখানে থাকবে মাদ্রাসার সর্বশেষ আপডেট," +
            " ইভেন্ট, শিক্ষার্থীদের অগ্রগতি এবং গুরুত্বপূর্ণ ঘোষণাসমূহ।",
        footerOurNewsletter1: "মাদ্রাসার সর্বশেষ আপডেট",


        //-----Admission Process-----//
        admissionProcess:"ভর্তি প্রক্রিয়া",
        admissionProcessHome:"হোম",
    }
};
function toggleLanguage() {
    if (currentLanguage === 'en') {
        currentLanguage = 'bn';
        document.getElementById('languageToggle').innerHTML = `en<i class="fa fa-toggle-on fa-2x" style="margin-right: 7px;margin-left: 7px;color: #000000"></i>bn`;
        changeLanguage('bn'); // Call your language-changing function
    } else {
        currentLanguage = 'en';
        document.getElementById('languageToggle').innerHTML = `en<i class="fa fa-toggle-off fa-2x" style="margin-right: 7px;margin-left: 7px;color: #000000"></i>bn`;
        changeLanguage('en'); // Call your language-changing function
    }
}

let currentLanguage = 'bn'; // Default language

// Function to change language
function changeLanguage(lang) {
    currentLanguage = lang;
    loadLanguage();
}

// Function to load language
function loadLanguage() {
    const data = translations[currentLanguage];
    document.querySelectorAll('.bismillah').forEach(el => el.textContent = data.bismillah);
    document.querySelectorAll('.day').forEach(el => el.textContent = data.day);
    document.querySelectorAll('.date').forEach(el => el.textContent = data.date);
    document.querySelectorAll('.email').forEach(el => el.textContent = data.email);
    document.querySelectorAll('.manuAdmissionProcess').forEach(el => el.textContent = data.manuAdmissionProcess);
    document.querySelectorAll('.manuAdmissionProcess1').forEach(el => el.textContent = data.manuAdmissionProcess1);
    document.querySelectorAll('.manuAdmissionProcess2').forEach(el => el.textContent = data.manuAdmissionProcess2);
    document.querySelectorAll('.manuAdmissionProcess3').forEach(el => el.textContent = data.manuAdmissionProcess3);
    document.querySelectorAll('.manuHome1').forEach(el => el.textContent = data.manuHome1);
    document.querySelectorAll('.manuCurriculum').forEach(el => el.textContent = data.manuCurriculum);
    document.querySelectorAll('.manuCurriculum1').forEach(el => el.textContent = data.manuCurriculum1);
    document.querySelectorAll('.manuCurriculum2').forEach(el => el.textContent = data.manuCurriculum2);
    document.querySelectorAll('.manuCurriculum3').forEach(el => el.textContent = data.manuCurriculum3);
    document.querySelectorAll('.manuCurriculum4').forEach(el => el.textContent = data.manuCurriculum4);
    document.querySelectorAll('.manuCurriculum5').forEach(el => el.textContent = data.manuCurriculum5);
    document.querySelectorAll('.readButton').forEach(el => el.textContent = data.readButton);
    document.querySelectorAll('.welcome').forEach(el => el.textContent = data.welcome);
    document.querySelectorAll('.description').forEach(el => el.textContent = data.description);
    document.querySelectorAll('.button').forEach(el => el.textContent = data.button);
    document.querySelectorAll('.manuAcademic').forEach(el => el.textContent = data.manuAcademic);
    document.querySelectorAll('.manuAcademic1').forEach(el => el.textContent = data.manuAcademic1);
    document.querySelectorAll('.manuAcademic2').forEach(el => el.textContent = data.manuAcademic2);
    document.querySelectorAll('.manuAcademic3').forEach(el => el.textContent = data.manuAcademic3);
    document.querySelectorAll('.manuAcademic4').forEach(el => el.textContent = data.manuAcademic4);
    document.querySelectorAll('.manuAcademic5').forEach(el => el.textContent = data.manuAcademic5);
    document.querySelectorAll('.manuDirectors').forEach(el => el.textContent = data.manuDirectors);
    document.querySelectorAll('.manuDirectors1').forEach(el => el.textContent = data.manuDirectors1);
    document.querySelectorAll('.manuDirectors2').forEach(el => el.textContent = data.manuDirectors2);
    document.querySelectorAll('.manuMadrasaGallery').forEach(el => el.textContent = data.manuMadrasaGallery);
    document.querySelectorAll('.manuContact').forEach(el => el.textContent = data.manuContact);
    document.querySelectorAll('.manuAdministration').forEach(el => el.textContent = data.manuAdministration);
    document.querySelectorAll('.footerOurService').forEach(el => el.textContent = data.footerOurService);
    document.querySelectorAll('.footerOurService1').forEach(el => el.textContent = data.footerOurService1);
    document.querySelectorAll('.footerOurService2').forEach(el => el.textContent = data.footerOurService2);
    document.querySelectorAll('.footerOurService3').forEach(el => el.textContent = data.footerOurService3);
    document.querySelectorAll('.footerOurService4').forEach(el => el.textContent = data.footerOurService4);
    document.querySelectorAll('.footerOurService5').forEach(el => el.textContent = data.footerOurService5);
    document.querySelectorAll('.footerOurService6').forEach(el => el.textContent = data.footerOurService6);
    document.querySelectorAll('.footerOurNewsletter1').forEach(el => el.textContent = data.footerOurNewsletter1);
    document.querySelectorAll('.footerOurNewsletter').forEach(el => el.textContent = data.footerOurNewsletter);
    document.querySelectorAll('.footerOurService').forEach(el => el.textContent = data.footerOurService);
    document.querySelectorAll('.admissionProcess').forEach(el => el.textContent = data.admissionProcess);
    document.querySelectorAll('.admissionProcessHome').forEach(el => el.textContent = data.admissionProcessHome);
    document.querySelectorAll('.manuDirectors3').forEach(el => el.textContent = data.manuDirectors3);


}

// Load default language on page load
window.onload = loadLanguage;
