<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search= House::All();

        if($request->filled('gym')) {
            if($request->gym =='Vc'){
                $search= $search->whereBetween('gymD',[1,500]);
            }
            elseif ($request->gym == 'C') {
                $search= $search->whereBetween('gymD',[1,1000]);
            }
            elseif ($request->gym == 'G') {
                $search= $search->whereBetween('gymD',[1,3000]);

            }
            else
            {
            }
        }

        if($request->filled('bus')) {
            if($request->bus =='Vc'){
                $search = $search->whereBetween('busD',[1,500]);
            }
            elseif ($request->bus == 'C') {
                $search = $search->whereBetween('busD',[1,1000]);
            }
            elseif ($request->bus == 'G') {
                $search = $search->whereBetween('busD',[1,3000]);

            }
            else
            {
            }
        }

        if($request->filled('cityCenter')) {
            if($request->cityCenter =='Vc'){
                $search = $search->whereBetween('cityCenterD',[1,500]);
            }
            elseif ($request->cityCenter == 'C') {
                $search = $search->whereBetween('cityCenterD',[1,1000]);
            }
            elseif ($request->cityCenter == 'G') {
                $search = $search->whereBetween('cityCenterD',[1,3000]);

            }
            else
            {
            }
        }

        if($request->filled('metro')) {
            if($request->metro =='Vc'){
                $search = $search->whereBetween('metroD',[1,500]);
            }
            elseif ($request->metro == 'C') {
                $search = $search->whereBetween('metroD',[1,1000]);
            }
            elseif ($request->metro == 'G') {
                $search = $search->whereBetween('metroD',[1,3000]);

            }
            else
            {
            }
        }

        if($request->filled('park')) {
            if($request->park =='Vc'){
                $search = $search->whereBetween('parkD',[1,500]);
            }
            elseif ($request->park == 'C') {
                $search = $search->whereBetween('parkD',[1,1000]);
            }
            elseif ($request->park == 'G') {
                $search = $search->whereBetween('parkD',[1,3000]);

            }
            else
            {
            }
        }

        if($request->filled('pharmacy')) {
            if($request->pharmacy =='Vc'){
                $search = $search->whereBetween('pharmacyD',[1,500]);
            }
            elseif ($request->pharmacy == 'C') {
                $search = $search->whereBetween('pharmacyD',[1,1000]);
            }
            elseif ($request->pharmacy == 'G') {
                $search = $search->whereBetween('pharmacyD',[1,3000]);

            }
            else
            {
            }
        }

        if($request->filled('school')) {
            if($request->school =='Vc'){
                $search = $search->whereBetween('schoolD',[1,500]);
            }
            elseif ($request->school == 'C') {
                $search = $search->whereBetween('schoolD',[1,1000]);
            }
            elseif ($request->school == 'G') {
                $search = $search->whereBetween('schoolD',[1,3000]);

            }
            else
            {
            }
        }

        if($request->filled('supermarket')) {
            if($request->supermarket =='Vc'){
                $search = $search->whereBetween('supermarketD',[1,500]);
            }
            elseif ($request->supermarket == 'C') {
                $search = $search->whereBetween('supermarketD',[1,1000]);
            }
            elseif ($request->supermarket == 'G') {
                $search = $search->whereBetween('supermarketD',[1,3000]);

            }
            else
            {
            }
        }



        if($request->filled('sizeMin')||($request->filled('sizeMax'))) {
            if($request->sizeMin>0) {
                $min=$request->sizeMin;
            }
            else {
                $min=0;
            }
            if($request->sizeMax>0) {
                $max=$request->sizeMax;
            }
            else {
                $max=400;
            }

            if($min>$max) {
                $min=$request->sizeMax;
                $max=$request->sizeMin;
            }

            $search = $search->whereBetween('size',[$min,$max]);
        }


        if($request->filled('yearMin')||($request->filled('yearMax'))) {
            if($request->yearMin>0) {
                $min=$request->yearMin;
            }
            else {
                $min=0;
            }
            if($request->yearMax>0) {
                $max=$request->yearMax;
            }
            else {
                $max=2020;
            }

            if($min>$max) {
                $min=$request->yearMax;
                $max=$request->yearMin;
            }

            $search = $search->whereBetween('year',[$min,$max]);
        }

        if($request->filled('floorMin')||($request->filled('floorMax'))) {
            if($request->floorMin>0) {
                $min=$request->floorMin;
            }
            else {
                $min=0;
            }
            if($request->floorMax>0) {
                $max=$request->floorMax;
            }
            else {
                $max=12;
            }

            if($min>$max) {
                $min=$request->floorMax;
                $max=$request->floorMin;
            }

            $search = $search->whereBetween('floor',[$min,$max]);
        }

        if($request->filled('priceMin')||($request->filled('priceMax'))) {
            if($request->priceMin>0) {
                $min=$request->priceMin;
            }
            else {
                $min=0;
            }
            if($request->priceMax>0) {
                $max=$request->priceMax;
            }
            else {
                $max=1000000;
            }

            if($min>$max) {
                $min=$request->priceMax;
                $max=$request->priceMin;
            }

            $search = $search->whereBetween('price',[$min,$max]);
        }

        if ($request->filled('bedrooms')) {
            if($request->bedrooms == '1'){

                $search = $search->where('bedrooms',1);
            }
            elseif($request->bedrooms == '2') {

                $search = $search->where('bedrooms',2);
            }
            elseif($request->bedrooms == '3') {

                $search = $search->where('bedrooms',3);
            }
            elseif($request->bedrooms == '4') {

                $search = $search->where('bedrooms',4);
            }
            elseif($request->bedrooms == '5') {

                $search = $search->where('bedrooms',5);
            }
            elseif($request->bedrooms == '6') {

                $search = $search->whereBetween('bedrooms',[6,8]);
            }
        }


        if ($request->filled('heat')) {
            if($request->heat == 'CP'){

                $search = $search->where('heat',0);
            }
            elseif($request->heat == 'GP') {

                $search = $search->where('heat',1);
            }
            elseif($request->heat == 'PG') {

                $search = $search->where('heat',2);
            }
            else {

                $search = $search->where('heat',3);
            }
        }

        if ($request->filled('firstOccupant')) {
            if($request->firstOccupant == 'first'){

                $search = $search->where('newBuild',1);
            }
            else {

            }
        }

        if ($request->filled('elevator')) {
            if($request->elavator == '1'){

                $search = $search->where('elevator',1);
            }
            else {

            }
        }

        if ($request->filled('singleFloor')) {
            if($request->singleFloor == 'S'){

                $search = $search->where('singleFloor',1);
            }
            else {

                $search = $search->where('singleFloor',0);
            }
        }

        return view('viewhouse', compact('search'));
    }
}
