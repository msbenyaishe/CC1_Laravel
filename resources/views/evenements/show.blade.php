<!DOCTYPE html>
<html>
<head>
    <title>Event Details</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="page-event-show">

<h2 class="page-title">Event Details</h2>

<div class="table-wrapper">
    <table class="details-table">
        <tr>
            <td class="label-cell">Theme</td>
            <td class="value-cell">{{ $evenement->theme }}</td>
        </tr>
        <tr>
            <td class="label-cell">Start Date</td>
            <td class="value-cell">{{ $evenement->date_debut }}</td>
        </tr>
        <tr>
            <td class="label-cell">End Date</td>
            <td class="value-cell">{{ $evenement->date_fin }}</td>
        </tr>
        <tr>
            <td class="label-cell">Description</td>
            <td class="value-cell">{{ $evenement->description }}</td>
        </tr>
        <tr>
            <td class="label-cell">Daily Cost</td>
            <td class="value-cell">{{ $evenement->cout_journalier }}</td>
        </tr>
        <tr>
            <td class="label-cell">Expert</td>
            <td class="value-cell">
                {{ $evenement->expert->nomExp }} {{ $evenement->expert->prenomExp }}
            </td>
        </tr>
    </table>
</div>

<h3 class="section-title">List of Workshops Provided</h3>

<div class="table-wrapper">
    <table class="ateliers-table">
        <tr>
            <th class="table-header">Workshop Name</th>
            <th class="table-header">Description</th>
        </tr>

        @foreach($evenement->ateliers as $atelier)
        <tr class="table-row">
            <td class="table-cell">{{ $atelier->nomAtelier }}</td>
            <td class="table-cell">{{ $atelier->descriptionAtelier }}</td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>
