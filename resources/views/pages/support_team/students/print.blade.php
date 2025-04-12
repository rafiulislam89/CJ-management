<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile - {{ $sr->user->name }}</title>
    <style>
        @media print {
            @page {
                size: A4 portrait;
                margin: 12mm;
            }

            body {
                font-family: Arial, sans-serif;
                margin: 0;
                font-size: 14px;
                text-align: left;
            }

            .container {
                width: 100%;
                padding: 20px;
            }

            .header-container {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 15px;
                border-bottom: 2px solid #000;
                padding-bottom: 10px;
            }

            .student-info {
                display: flex;
                align-items: center;
            }

            .student-photo {
                height: 100px;
                width: 100px;
                border-radius: 50%;
                margin-right: 15px;
            }

            .content {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .column {
                width: 48%;
                padding: 10px;
                box-sizing: border-box;
            }

            .details-section {
                margin-top: 15px;
            }

            .details-section h3 {
                background-color: #f0f0f0;
                padding: 5px;
                font-size: 16px;
                margin-bottom: 5px;
            }

            .details strong {
                display: inline-block;
                width: 180px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header-container">
        <div class="student-info">
            <img src="{{asset($sr->photo)}}" class="student-photo" style="max-height: 200px" alt="Student Photo">
            <div>
                <h2>{{ $sr->user->name }}</h2>
                <p><strong>Admission No:</strong> {{ $sr->adm_no }}</p>
            </div>
        </div>
        <div style="text-align: right; padding-right: 10px; margin-right: 10px;">
            <h2>মুসলিহুল উম্মাহ হিফজ মাদ্রাসা</h2>
            <p>১৪০ আজমপুর কাঁচা বাজার, দক্ষিণখান,উত্তরা, ঢাকা -১২৩০</p>
            <p><strong>Phone:</strong> ০১৯১৬৩৫৪৭৭০</p>
        </div>

    </div>

    <div class="content">
        <div class="column">
            <div class="details-section">
                <h3>Personal Information</h3>
                <p class="details"><strong>Name:</strong> {{ $sr->user->name ?? 'N/A' }}</p>
                <p class="details"><strong>Email:</strong> {{ $sr->user->email ?? 'N/A' }}</p>
                <p class="details"><strong>Gender:</strong> {{ $sr->user->gender ?? 'N/A' }}</p>
                <p class="details"><strong>Phone:</strong> {{ $sr->user->phone ?? 'N/A' }}</p>
                <p class="details"><strong>Date of Birth:</strong> {{ $sr->dob ?? 'N/A' }}</p>
                <p class="details"><strong>Age: </strong> {{ $sr->age ?? 'N/A' }}</p>
                <p class="details"><strong>Alternate Phone: </strong> {{ $sr->user->phone2 ?? 'N/A' }}</p>


            </div>
            <div class="details-section">
                <h3>Guardian Information</h3>
                <p class="details"><strong>Father's Name:</strong> {{ $sr->father_name ?? 'N/A' }}</p>
                <p class="details"><strong>Mother's Name:</strong> {{ $sr->mother_name ?? 'N/A' }}</p>

                <p class="details"><strong>Guardian Name:</strong> {{ $sr->guardian_name ?? 'N/A' }}</p>
                <p class="details"><strong>Relation:</strong> {{ $sr->guardian_relation ?? 'N/A' }}</p>
                <p class="details"><strong>Occupation:</strong> {{ $sr->guardian_occupation ?? 'N/A' }}</p>
                <p class="details"><strong>Mobile:</strong> {{ $sr->guardian_mobile ?? 'N/A' }}</p>
            </div>
        </div>

        <div class="column">
            <div class="details-section">
                <h3>Academic Information</h3>
                <p class="details"><strong>Admission No.:</strong> {{ $sr->adm_no ?? 'N/A' }}</p>
                <p class="details"><strong>Class:</strong> {{ $sr->my_class->name ?? 'N/A' }}</p>
                <p class="details"><strong>Section:</strong> {{ $sr->section->name ?? 'N/A' }}</p>
                <p class="details"><strong>Admission Date:</strong> {{ $sr->admission_date ?? 'N/A' }}</p>
                <p class="details"><strong>Discount:</strong> {{ $sr->discount ?? '0' }}</p>
                <p class="details"><strong>Previous Institution:</strong> {{ $sr->previous_institution_name ?? 'N/A' }}</p>
                <p class="details"><strong>Previous Class:</strong> {{ $sr->prev_class_admitted ?? 'N/A' }}</p>
                <p class="details"><strong>Examiner:</strong> {{ $sr->examiner ?? 'N/A' }}</p>
            </div>


            <div class="details-section">
                <h3>Address Information</h3>
                <p class="details"><strong>Permanent Address:</strong> {{ $sr->permanent_address ?? 'N/A' }}</p>
                <p class="details"><strong>Village:</strong> {{ $sr->village ?? 'N/A' }}</p>
                <p class="details"><strong>Post Office:</strong> {{ $sr->post_office ?? 'N/A' }}</p>
                <p class="details"><strong>Police Station:</strong> {{ $sr->police_station ?? 'N/A' }}</p>
                <p class="details"><strong>District:</strong> {{ $sr->district ?? 'N/A' }}</p>
            </div>
        </div>
    </div>
</div>

<script>
    window.print();
</script>

</body>
</html>
