<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::factory()->create([
            'name' => 'Laravel Event',
            'slug' => 'laravel-event',
            'description' => 'Os eventos do Laravel são uma maneira de acionar e manipular ações ou tarefas específicas dentro do seu aplicativo. Eles seguem o padrão do observador, onde um evento é disparado ou gerado, e um ou mais ouvintes são responsáveis por manipular esse evento.',
            'image' => 'events-manager/events/laravel-event.jpeg',
            'country_id' => 1,
            'city_id' => 1,
            'address' => 'Av. Paulista, 1000 - Bela Vista',
            'user_id' => 1,
            'tickets' => random_int(10, 40),
            'start_date' => '2021-10-10',
            'end_date' => '2021-10-12',
        ]);

        Event::factory()->create([
            'name' => 'PHP Conference',
            'slug' => 'php-conference',
            'description' => 'As conferências PHP são uma ótima maneira de aprender sobre novos desenvolvimentos na comunidade PHP e fazer networking com outros desenvolvedores PHP.',
            'image' => 'events-manager/events/php-conference.jpeg',
            'country_id' => 2,
            'city_id' => 2,
            'address' => 'R. Senador Dantas, 25 - Centro',
            'user_id' => 2,
            'tickets' => random_int(10, 40),
            'start_date' => '2022-05-15',
            'end_date' => '2022-05-17',
        ]);

        Event::factory()->create([
            'name' => 'JavaScript Summit',
            'slug' => 'javascript-summit',
            'description' => 'Os encontros JavaScript fornecem mergulhos profundos em frameworks JavaScript e melhores práticas, reunindo os principais desenvolvedores da área.',
            'image' => 'events-manager/events/javascript-summit.jpeg',
            'country_id' => 3,
            'city_id' => 3,
            'address' => 'Praça Sete de Setembro, 123 - Centro',
            'user_id' => 3,
            'tickets' => random_int(10, 40),
            'start_date' => '2022-08-20',
            'end_date' => '2022-08-22',
        ]);

        Event::factory()->create([
            'name' => 'Vue.js Workshop',
            'slug' => 'vuejs-workshop',
            'description' => 'Os workshops Vue.js são sessões práticas que ensinam como construir interfaces de usuário dinâmicas usando o framework Vue.js.',
            'image' => 'events-manager/events/vuejs-workshop.jpeg',
            'country_id' => 1,
            'city_id' => 4,
            'address' => 'R. Barão do Serro Azul, 530 - Centro',
            'user_id' => 4,
            'tickets' => random_int(10, 40),
            'start_date' => '2022-11-05',
            'end_date' => '2022-11-07',
        ]);

        Event::factory()->create([
            'name' => 'React Meetup',
            'slug' => 'react-meetup',
            'description' => 'Os encontros React são um lugar para desenvolvedores React compartilharem conhecimento e experiências, discutirem novos recursos e fazer networking com colegas.',
            'image' => 'events-manager/events/react-meetup.jpeg',
            'country_id' => 1,
            'city_id' => 5,
            'address' => 'Av. Borges de Medeiros, 2500 - Praia de Belas',
            'user_id' => 5,
            'tickets' => random_int(10, 40),
            'start_date' => '2023-01-18',
            'end_date' => '2023-01-20',
        ]);

        Event::factory()->create([
            'name' => 'Node.js Hackathon',
            'slug' => 'nodejs-hackathon',
            'description' => 'Os hackathons Node.js são eventos intensivos onde os desenvolvedores criam e apresentam projetos usando Node.js dentro de um período de tempo limitado.',
            'image' => 'events-manager/events/nodejs-hackathon.jpeg',
            'country_id' => 2,
            'city_id' => 6,
            'address' => 'Esplanada dos Ministérios, Bloco T - Zona Cívico-Administrativa',
            'user_id' => 6,
            'tickets' => random_int(10, 40),
            'start_date' => '2023-03-25',
            'end_date' => '2023-03-27',
        ]);

        Event::factory()->create([
            'name' => 'CSS Styling Conference',
            'slug' => 'css-styling-conference',
            'description' => 'As conferências de estilo CSS focam nas últimas tendências e técnicas em CSS, ajudando os desenvolvedores a aprimorar o apelo visual de seus aplicativos da web.',
            'image' => 'events-manager/events/css-styling-conference.jpeg',
            'country_id' => 1,
            'city_id' => 7,
            'address' => 'Largo do Cruzeiro de São Francisco, s/n - Pelourinho',
            'user_id' => 7,
            'tickets' => random_int(10, 40),
            'start_date' => '2023-06-12',
            'end_date' => '2023-06-14',
        ]);

        Event::factory()->create([
            'name' => 'HTML5 Bootcamp',
            'slug' => 'html5-bootcamp',
            'description' => 'HTML5 bootcamps são sessões de treinamento intensivo que ensinam os fundamentos do HTML5, incluindo novos recursos e melhores práticas.',
            'image' => 'events-manager/events/html5-bootcamp.jpeg',
            'country_id' => 2,
            'city_id' => 8,
            'address' => 'Av. Beira Mar, 1000 - Meireles',
            'user_id' => 8,
            'tickets' => random_int(10, 40),
            'start_date' => '2023-09-01',
            'end_date' => '2023-09-03',
        ]);

        Event::factory()->create([
            'name' => 'Bootstrap Seminar',
            'slug' => 'bootstrap-seminar',
            'description' => 'Os seminários Bootstrap abrangem os recursos mais recentes e as melhores práticas para usar a estrutura Bootstrap para criar aplicativos da web responsivos.',
            'image' => 'events-manager/events/bootstrap-seminar.jpeg',
            'country_id' => 3,
            'city_id' => 9,
            'address' => 'Av. Djalma Batista, 3000 - Chapada',
            'user_id' => 9,
            'tickets' => random_int(10, 40),
            'start_date' => '2023-12-10',
            'end_date' => '2023-12-12',
        ]);

        Event::factory()->create([
            'name' => 'Tailwind CSS Conference',
            'slug' => 'tailwind-css-conference',
            'description' => 'As conferências Tailwind CSS reúnem desenvolvedores para discutir a estrutura CSS de utilidade em primeiro lugar e compartilhar experiências e melhores práticas.',
            'image' => 'events-manager/events/tailwind-css-conference.jpeg',
            'country_id' => 1,
            'city_id' => 10,
            'address' => 'Av. Epitácio Pessoa, 500 - Tambaú',
            'user_id' => 10,
            'tickets' => random_int(10, 40),
            'start_date' => '2024-02-15',
            'end_date' => '2024-02-17',
        ]);

    }
}
