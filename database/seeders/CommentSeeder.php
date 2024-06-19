<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::factory()->create(['user_id' => 1, 'event_id' => 1, 'content' => 'Evento incrível! Aprendi muito sobre Laravel.']);
        Comment::factory()->create(['user_id' => 2, 'event_id' => 1, 'content' => 'Gostei muito das palestras, muito conhecimento compartilhado.']);
        Comment::factory()->create(['user_id' => 3, 'event_id' => 1, 'content' => 'A organização do evento estava impecável.']);
        Comment::factory()->create(['user_id' => 4, 'event_id' => 1, 'content' => 'As sessões práticas foram muito úteis.']);
        Comment::factory()->create(['user_id' => 5, 'event_id' => 1, 'content' => 'Espero participar de mais eventos como este.']);

        Comment::factory()->create(['user_id' => 1, 'event_id' => 2, 'content' => 'A conferência de PHP foi excelente!']);
        Comment::factory()->create(['user_id' => 6, 'event_id' => 2, 'content' => 'Muitas novidades interessantes sobre PHP.']);
        Comment::factory()->create(['user_id' => 7, 'event_id' => 2, 'content' => 'O networking foi incrível, conheci muitos profissionais.']);
        Comment::factory()->create(['user_id' => 8, 'event_id' => 2, 'content' => 'As palestras foram muito esclarecedoras.']);
        Comment::factory()->create(['user_id' => 9, 'event_id' => 2, 'content' => 'Com certeza voltarei no próximo ano!']);

        Comment::factory()->create(['user_id' => 1, 'event_id' => 3, 'content' => 'O summit de JavaScript foi muito bom.']);
        Comment::factory()->create(['user_id' => 2, 'event_id' => 3, 'content' => 'Adorei as discussões sobre novos frameworks.']);
        Comment::factory()->create(['user_id' => 3, 'event_id' => 3, 'content' => 'A organização do evento estava excelente.']);
        Comment::factory()->create(['user_id' => 4, 'event_id' => 3, 'content' => 'Foi ótimo aprender mais sobre JavaScript.']);
        Comment::factory()->create(['user_id' => 10, 'event_id' => 3, 'content' => 'Os workshops foram muito práticos.']);

        Comment::factory()->create(['user_id' => 1, 'event_id' => 4, 'content' => 'O workshop de Vue.js foi muito produtivo.']);
        Comment::factory()->create(['user_id' => 5, 'event_id' => 4, 'content' => 'Adorei as sessões práticas.']);
        Comment::factory()->create(['user_id' => 6, 'event_id' => 4, 'content' => 'Os instrutores eram muito experientes.']);
        Comment::factory()->create(['user_id' => 7, 'event_id' => 4, 'content' => 'Aprendi muitas coisas novas.']);
        Comment::factory()->create(['user_id' => 8, 'event_id' => 4, 'content' => 'Foi um ótimo evento, bem organizado.']);

        Comment::factory()->create(['user_id' => 1, 'event_id' => 5, 'content' => 'O meetup de React foi muito interessante.']);
        Comment::factory()->create(['user_id' => 9, 'event_id' => 5, 'content' => 'Gostei muito das discussões técnicas.']);
        Comment::factory()->create(['user_id' => 10, 'event_id' => 5, 'content' => 'O conteúdo apresentado foi muito relevante.']);
        Comment::factory()->create(['user_id' => 2, 'event_id' => 5, 'content' => 'Os palestrantes eram muito bons.']);
        Comment::factory()->create(['user_id' => 3, 'event_id' => 5, 'content' => 'Foi um ótimo evento para networking.']);

        Comment::factory()->create(['user_id' => 1, 'event_id' => 6, 'content' => 'O hackathon de Node.js foi muito desafiador.']);
        Comment::factory()->create(['user_id' => 4, 'event_id' => 6, 'content' => 'Adorei trabalhar em equipe durante o hackathon.']);
        Comment::factory()->create(['user_id' => 5, 'event_id' => 6, 'content' => 'Os projetos apresentados foram incríveis.']);
        Comment::factory()->create(['user_id' => 6, 'event_id' => 6, 'content' => 'Foi uma experiência muito enriquecedora.']);
        Comment::factory()->create(['user_id' => 7, 'event_id' => 6, 'content' => 'Com certeza participarei de outros hackathons.']);

        Comment::factory()->create(['user_id' => 1, 'event_id' => 7, 'content' => 'A conferência de CSS foi muito inspiradora.']);
        Comment::factory()->create(['user_id' => 8, 'event_id' => 7, 'content' => 'Gostei muito das novas técnicas apresentadas.']);
        Comment::factory()->create(['user_id' => 9, 'event_id' => 7, 'content' => 'Foi ótimo ver as novidades em CSS.']);
        Comment::factory()->create(['user_id' => 10, 'event_id' => 7, 'content' => 'Os palestrantes eram excelentes.']);
        Comment::factory()->create(['user_id' => 2, 'event_id' => 7, 'content' => 'Aprendi muitas coisas novas sobre CSS.']);

        Comment::factory()->create(['user_id' => 1, 'event_id' => 8, 'content' => 'O bootcamp de HTML5 foi muito completo.']);
        Comment::factory()->create(['user_id' => 3, 'event_id' => 8, 'content' => 'Gostei muito da abordagem prática do bootcamp.']);
        Comment::factory()->create(['user_id' => 4, 'event_id' => 8, 'content' => 'Os instrutores eram muito didáticos.']);
        Comment::factory()->create(['user_id' => 5, 'event_id' => 8, 'content' => 'Foi uma ótima experiência de aprendizado.']);
        Comment::factory()->create(['user_id' => 6, 'event_id' => 8, 'content' => 'Recomendo a todos os desenvolvedores.']);

        Comment::factory()->create(['user_id' => 1, 'event_id' => 9, 'content' => 'O seminário de Bootstrap foi muito informativo.']);
        Comment::factory()->create(['user_id' => 7, 'event_id' => 9, 'content' => 'Gostei muito das novas funcionalidades apresentadas.']);
        Comment::factory()->create(['user_id' => 8, 'event_id' => 9, 'content' => 'Foi ótimo aprender mais sobre Bootstrap.']);
        Comment::factory()->create(['user_id' => 9, 'event_id' => 9, 'content' => 'Os palestrantes eram muito bons.']);
        Comment::factory()->create(['user_id' => 10, 'event_id' => 9, 'content' => 'A organização do evento foi excelente.']);

        Comment::factory()->create(['user_id' => 1, 'event_id' => 10, 'content' => 'A conferência de Tailwind CSS foi muito útil.']);
        Comment::factory()->create(['user_id' => 2, 'event_id' => 10, 'content' => 'Gostei muito das palestras sobre Tailwind.']);
        Comment::factory()->create(['user_id' => 3, 'event_id' => 10, 'content' => 'Aprendi muitas novas técnicas.']);
        Comment::factory()->create(['user_id' => 4, 'event_id' => 10, 'content' => 'Foi um evento muito bem organizado.']);
        Comment::factory()->create(['user_id' => 5, 'event_id' => 10, 'content' => 'Com certeza participarei novamente.']);
    }
}
