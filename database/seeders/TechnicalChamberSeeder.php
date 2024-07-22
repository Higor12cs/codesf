<?php

namespace Database\Seeders;

use App\Models\TechnicalChamber;
use App\Models\TechnicalChamberMember;
use Illuminate\Database\Seeder;

class TechnicalChamberSeeder extends Seeder
{
    public function run()
    {
        $chambers = [
            [
                'name' => 'Atração de Investimentos',
                'icon' => 'currency-exchange',
                'members' => [
                    ['name' => 'Dino Marques de Oliveira', 'url' => '#'],
                    ['name' => 'Tiago Queiroz de Queiroz', 'url' => '#'],
                    ['name' => 'Aldiberto Dias Machado Júnior', 'url' => '#'],
                    ['name' => 'Maria Fernanda Clemente Petersen', 'url' => '#'],
                    ['name' => 'Leopoldo Galvão Morais Campos', 'url' => '#'],
                ],
            ],
            [
                'name' => 'Desenvolvimento Urbano',
                'icon' => 'building',
                'members' => [
                    ['name' => 'Paulo Roberto Coelho', 'url' => '#'],
                    ['name' => 'João de Deus Braga Júnior', 'url' => '#'],
                    ['name' => 'David Carlos de Oliveira', 'url' => '#'],
                    ['name' => 'Laydison Santos Marra', 'url' => '#'],
                ],
            ],
            [
                'name' => 'Meio Ambiente e Saneamento Básico',
                'icon' => 'tree',
                'members' => [],
            ],
            [
                'name' => 'Matrizes Energéticas',
                'icon' => 'battery-full',
                'members' => [],
            ],
            [
                'name' => 'Inteligência de Dados',
                'icon' => 'bar-chart',
                'members' => [],
            ],
            [
                'name' => 'Ciência, Tecnologia e Inovação',
                'icon' => 'lightbulb',
                'members' => [
                    ['name' => 'Ivan José dos Reis Filho', 'url' => '#'],
                    ['name' => 'Gustavo Gravatim (UEMG)', 'url' => '#'],
                    ['name' => 'Fábio Rodrigues (UEMG)', 'url' => '#'],
                    ['name' => 'Tais Arthur (UEMG)', 'url' => '#'],
                    ['name' => 'Pedro Paulo (Objetivo)', 'url' => '#'],
                    ['name' => 'Allynson Fujita (UEMG)', 'url' => '#'],
                    ['name' => 'Bruno Ruiz (Cidade Imperial)', 'url' => '#'],
                    ['name' => 'Fábio Muniz (Cidade Imperial)', 'url' => '#'],
                    ['name' => 'Weder Martins (Prefeitura)', 'url' => '#'],
                    ['name' => 'Matheus Frazão (Empreendedor TI)', 'url' => '#'],
                    ['name' => 'Amilton Soares (Empreendedor TI)', 'url' => '#'],
                    ['name' => 'Samuel Silvério (Empreendedor Info)', 'url' => '#'],
                    ['name' => 'Glauber Ribeiro (Cerradão)', 'url' => '#'],
                    ['name' => 'Leonardo Barcelos (UEMG)', 'url' => '#'],
                    ['name' => 'Sérgio Portari (UEMG)', 'url' => '#'],
                    ['name' => 'Leandro Macedo (Cerradão)', 'url' => '#'],
                    ['name' => 'Joana Rafaela (SEBRAE)', 'url' => '#'],
                    ['name' => 'Danilo Santos (Grupo JB)', 'url' => '#'],
                    ['name' => 'Fabrício Cistolo (Cerradão)', 'url' => '#'],
                    ['name' => 'Josnei Freitas (UEMG)', 'url' => '#'],
                    ['name' => 'Leandro Queiroz (Consultor)', 'url' => '#'],
                ],
            ],
            [
                'name' => 'Saúde',
                'icon' => 'heart',
                'members' => [
                    ['name' => 'Daniel Godoi Bernardes da Silva', 'url' => '#'],
                    ['name' => 'Leandro Augusto Pantaleão', 'url' => '#'],
                    ['name' => 'Carlos Alfredo Salci Queiroz', 'url' => '#'],
                ],
            ],
        ];

        $chamberOrder = 1;
        foreach ($chambers as $chamberData) {
            $chamber = TechnicalChamber::create([
                'name' => $chamberData['name'],
                'icon' => $chamberData['icon'],
                'order' => $chamberOrder,
            ]);

            $memberOrder = 1;
            foreach ($chamberData['members'] as $memberData) {
                TechnicalChamberMember::create([
                    'technical_chamber_id' => $chamber->id,
                    'name' => $memberData['name'],
                    'url' => $memberData['url'],
                    'order' => $memberOrder,
                ]);
                $memberOrder++;
            }

            $chamberOrder++;
        }
    }
}
