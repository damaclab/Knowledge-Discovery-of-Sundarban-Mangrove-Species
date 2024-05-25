<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /** Algorithms Seeder **/

        DB::table('algorithms')->insert([
            'algorithm_id' => (string) Str::of(Str::uuid()),
            'algorithm_type' => 'Association Rule Mining',
            'algorithm_name' => 'FIST',
            'dataset_type' => 'CSV',
            'publication_url' => '#',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('algorithms')->insert([
            'algorithm_id' => (string) Str::of(Str::uuid()),
            'algorithm_type' => 'Association Rule Mining',
            'algorithm_name' => 'CellBiClust',
            'dataset_type' => 'CSV',
            'publication_url' => '#',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('algorithms')->insert([
            'algorithm_id' => (string) Str::of(Str::uuid()),
            'algorithm_type' => 'Frequent Itemset Mining',
            'algorithm_name' => 'CLA-FPM',
            'dataset_type' => 'TXT',
            'publication_url' => '#',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('algorithms')->insert([
            'algorithm_id' => (string) Str::of(Str::uuid()),
            'algorithm_type' => 'Frequent Itemset Mining',
            'algorithm_name' => 'CAFP',
            'dataset_type' => 'CSV',
            'publication_url' => public_path('publications\Knowledge-discovery-mangrove-published.pdf'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        /** Publications Seeder **/

        DB::table('publications')->insert([
            'publication_id' => (string) Str::of(Str::uuid()),
            'publication_title' => 'Knowledge Discovery of Sundarban Mangrove Species: A Way Forward for Managing Species Biodiversity." SN Computer Science, 3, no. 1 (2022): 1-14.',
            'publication_type' => 'Journal',
            'authors' => 'Moumita Ghosh, Anirban Roy, Kartick Chandra Mondal',
            'journal' => 'Springer',
            'year_of_publication' => '2022',
            'publication_url' => public_path('publications\Knowledge-discovery-mangrove-published.pdf'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('publications')->insert([
            'publication_id' => (string) Str::of(Str::uuid()),
            'publication_title' => 'Frequent Itemset Mining Using FP-Tree: A CLA-based Approach and Its Extended Application in Biodiversity.',
            'publication_type' => 'Journal',
            'authors' => 'Moumita Ghosh, Pritam Sil, Anirban Roy, Kartick Chandra Mondal',
            'journal' => 'Under Review',
            'year_of_publication' => '2022',
            'publication_url' => '#',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('publications')->insert([
            'publication_id' => (string) Str::of(Str::uuid()),
            'publication_title' => 'An Irregular CLA-based Novel Frequent Pattern Mining Approach.',
            'publication_type' => 'Journal',
            'authors' => 'Moumita Ghosh, Sourav Mondal, Harshita Moondra, Anirban Roy, Kartick Chandra Mondal',
            'journal' => 'Under Review',
            'year_of_publication' => '2021',
            'publication_url' => '#',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('publications')->insert([
            'publication_id' => (string) Str::of(Str::uuid()),
            'publication_title' => 'CellBiClust: A Novel ICLA based Distributed FP-Tree Approach for Inclusion Maximal Biclusters.',
            'publication_type' => 'Journal',
            'authors' => 'Moumita Ghosh, Pritam Sil, Anirban Roy, Kartick Chandra Mondal',
            'journal' => 'Under Review',
            'year_of_publication' => '2022',
            'publication_url' => '#',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('publications')->insert([
            'publication_id' => (string) Str::of(Str::uuid()),
            'publication_title' => 'FCA based Constant and Coherent Signed Bicluster Identification and its Application in Biodiversity Study", AISC Springer Series, Proceedings of International Conference on Advanced Computing Applications - ICACA 2021.',
            'publication_type' => 'Conference',
            'authors' => 'Moumita Ghosh, Anirban Roy, Kartick Chandra Mondal',
            'journal' => 'Springer',
            'year_of_publication' => '2021',
            'publication_url' => public_path('publications\Signed_Bicluster_ICACA.pdf'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('publications')->insert([
            'publication_id' => (string) Str::of(Str::uuid()),
            'publication_title' => 'Computational Biodiversity", AISC Springer Series, Proceedings of International Conference on Advanced Computing Applications - ICACA 2021, Springer, 2020, pp. 1–6.',
            'publication_type' => 'Conference',
            'authors' => 'Moumita Ghosh, Kartick Chandra Mondal',
            'journal' => 'Springer',
            'year_of_publication' => '2021',
            'publication_url' => public_path('publications\ComputationalBiodiversity_ICACA_submitted copy.pdf'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('publications')->insert([
            'publication_id' => (string) Str::of(Str::uuid()),
            'publication_title' => 'Analysis of Indian Estuarine Data of Flora & Fauna", 2nd International Conference on Data Science and Applications (ICDSA 2021).',
            'publication_type' => 'Conference',
            'authors' => 'Moumita Ghosh, Anirban Roy, Kartick Chandra Mondal',
            'journal' => 'Springer',
            'year_of_publication' => '2021',
            'publication_url' => public_path('publications\Analysis-of-flora-fauna-published.pdf'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('publications')->insert([
            'publication_id' => (string) Str::of(Str::uuid()),
            'publication_title' => 'Determining Dark Diversity of Different Faunal Groups in Indian Estuarine Ecosystem: A New Approach with Computational Biodiversity" In: J. K. Mandal and D. De (eds) Advanced Techniques for IoT Applications. EAIT 2021. Lecture Notes in Networks and Systems, vol 292, Pages: 147-158, Springer, Singapore. DOI: https://doi.org/10.1007/978-981-16-4435-1_16, Print ISBN: 978-981-16-4434-4, Online ISBN: 978-981-16-4435-1',
            'publication_type' => 'Conference',
            'authors' => 'Moumita Ghosh, Anirban Roy, Kartick Chandra Mondal',
            'journal' => 'Springer',
            'year_of_publication' => '2021',
            'publication_url' => public_path('publications\Dark_diversity.pdf'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
