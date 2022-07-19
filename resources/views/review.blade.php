@extends('layouts.app')
@section('title', 'Our Review')
@section('content')
    <div class="body">
        <div class="centerize">
            <div class="head">
                <div class="offer">
                    <marquee>{{ $setting->slide_text }}</marquee>
                </div>
            </div>
            <br>
            <table>
                <tr>
                    <th colspan="3">
                        <center>Last 30Days Reviews</center>
                    </th>
                </tr>
                <tr>
                    <th>Name</th>
                    <th>Review</th>
                    <th>Ratting</th>
                </tr>
                @forelse ($reviews as $item)
                    <tr>
                        <td>1. {{ $item->name }}</td>
                        <td>{{ $item->review_details }}</td>
                        <td>{{ $item->review_rating }}☆ (
                            {{ $item->created_at->diffForHumans() }})
                        </td>
                    </tr>
                @empty
                    <p class="text-danger">Nothing to show any review !</p>
                @endforelse
            </table>
            <br>
            <style>
                table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                }

                td,
                th {
                    border: 1px solid #ffffff;
                    text-align: left;
                    padding: 8px;
                }

                tr:nth-child(even) {
                    background-color: #ffffff;
                }
            </style>
        </div>
    </div>
@endsection