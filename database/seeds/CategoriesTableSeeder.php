<?php

use Illuminate\Database\Seeder;
use App\Category;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $major_category_names = [
                    'ジーパン', 'チノパン', 
                ];
                $pants_description_categories = [
                    '硬い', '軟らかい', 
                ];
                $pants_color_categories = [
                    '緑', '赤',
                ];
            
                $pants_price_categories = [
                    '100円', '500円', '1000円','5000円','10000円',
                ];
                
                // 先生にきく
                    foreach ($major_category_names as $major_category_name) {
                    if ($major_category_name == 'ジーパン') {
                            foreach ($pants_description_categories as $pants_description_category) {
                            if ($pants_description_category == '硬い') {
                                foreach ($pants_color_categories as $pants_color_category){ 
                                if ($pants_color_category == '緑') {
                                    foreach ($pants_price_categories as $pants_price_category) {
                                               Category::create([
                                                    'name' => $major_category_name,
                                                    'description' => $pants_description_category,
                                                    'color' => $pants_color_category,
                                                    'price' => $pants_price_category,
                                                    'major_category_name' => $major_category_name
                                                ]);
}}}}}}
if ($major_category_name == 'ジーパン') {
    foreach ($pants_description_categories as $pants_description_category) {
    if ($pants_description_category == '硬い') {
        foreach ($pants_color_categories as $pants_color_category){ 
        if ($pants_color_category == '赤') {
            foreach ($pants_price_categories as $pants_price_category) {
                       Category::create([
                            'name' => $major_category_name,
                            'description' => $pants_description_category,
                            'color' => $pants_color_category,
                            'price' => $pants_price_category,
                            'major_category_name' => $major_category_name
                        ]);
}}}}}}
if ($major_category_name == 'ジーパン') {
    foreach ($pants_description_categories as $pants_description_category) {
    if ($pants_description_category == '軟らかい') {
        foreach ($pants_color_categories as $pants_color_category){ 
        if ($pants_color_category == '緑') {
            foreach ($pants_price_categories as $pants_price_category) {
                       Category::create([
                            'name' => $major_category_name,
                            'description' => $pants_description_category,
                            'color' => $pants_color_category,
                            'price' => $pants_price_category,
                            'major_category_name' => $major_category_name
                        ]);
}}}}}}
if ($major_category_name == 'ジーパン') {
    foreach ($pants_description_categories as $pants_description_category) {
    if ($pants_description_category == '軟らかい') {
        foreach ($pants_color_categories as $pants_color_category){ 
        if ($pants_color_category == '赤') {
            foreach ($pants_price_categories as $pants_price_category) {
                       Category::create([
                            'name' => $major_category_name,
                            'description' => $pants_description_category,
                            'color' => $pants_color_category,
                            'price' => $pants_price_category,
                            'major_category_name' => $major_category_name
                        ]);
}}}}}}
if ($major_category_name == 'チノパン') {
    foreach ($pants_description_categories as $pants_description_category) {
    if ($pants_description_category == '硬い') {
        foreach ($pants_color_categories as $pants_color_category){ 
        if ($pants_color_category == '緑') {
            foreach ($pants_price_categories as $pants_price_category) {
                       Category::create([
                            'name' => $major_category_name,
                            'description' => $pants_description_category,
                            'color' => $pants_color_category,
                            'price' => $pants_price_category,
                            'major_category_name' => $major_category_name
                        ]);
}}}}}}
if ($major_category_name == 'チノパン') {
    foreach ($pants_description_categories as $pants_description_category) {
    if ($pants_description_category == '硬い') {
        foreach ($pants_color_categories as $pants_color_category){ 
        if ($pants_color_category == '赤') {
            foreach ($pants_price_categories as $pants_price_category) {
                       Category::create([
                            'name' => $major_category_name,
                            'description' => $pants_description_category,
                            'color' => $pants_color_category,
                            'price' => $pants_price_category,
                            'major_category_name' => $major_category_name
                        ]);
}}}}}}
if ($major_category_name == 'チノパン') {
    foreach ($pants_description_categories as $pants_description_category) {
    if ($pants_description_category == '軟らかい') {
        foreach ($pants_color_categories as $pants_color_category){ 
        if ($pants_color_category == '赤') {
            foreach ($pants_price_categories as $pants_price_category) {
                       Category::create([
                            'name' => $major_category_name,
                            'description' => $pants_description_category,
                            'color' => $pants_color_category,
                            'price' => $pants_price_category,
                            'major_category_name' => $major_category_name
                        ]);
}}}}}}
if ($major_category_name == 'チノパン') {
    foreach ($pants_description_categories as $pants_description_category) {
    if ($pants_description_category == '軟らかい') {
        foreach ($pants_color_categories as $pants_color_category){ 
        if ($pants_color_category == '緑') {
            foreach ($pants_price_categories as $pants_price_category) {
                       Category::create([
                            'name' => $major_category_name,
                            'description' => $pants_description_category,
                            'color' => $pants_color_category,
                            'price' => $pants_price_category,
                            'major_category_name' => $major_category_name
                        ]);
}}}}}}
}}}