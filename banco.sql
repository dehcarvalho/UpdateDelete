-- =====================================================
-- PROJETO: Locadora de Jogos (treino de UPDATE e DELETE)
-- Rode este arquivo no phpMyAdmin (aba SQL) ou importe.
-- Pode rodar de novo sempre que quiser "resetar" o banco.
-- =====================================================

DROP DATABASE IF EXISTS locadora;
CREATE DATABASE locadora CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE locadora;

CREATE TABLE jogos (
    id         INT AUTO_INCREMENT PRIMARY KEY,
    titulo     VARCHAR(100)  NOT NULL,
    genero     VARCHAR(40)   NOT NULL,
    plataforma VARCHAR(30)   NOT NULL,
    ano        INT           NOT NULL,
    preco      DECIMAL(8,2)  NOT NULL,
    estoque    INT           NOT NULL DEFAULT 0
);

INSERT INTO jogos (titulo, genero, plataforma, ano, preco, estoque) VALUES
('Minecraft',              'Sandbox',   'PC',          2011,  99.90, 12),
('Stardew Valley',         'Simulação', 'PC',          2016,  24.99,  8),
('Hollow Knight',          'Metroidvania','Switch',    2017,  46.99,  5),
('Celeste',                'Plataforma','Switch',      2018,  36.99,  0),
('FIFA 23',                'Esporte',   'PlayStation', 2022, 149.90,  3),
('Among Us',               'Party',     'Mobile',      2018,   0.00, 50),
('Terraria',               'Sandbox',   'PC',          2011,  19.99,  7),
('Rocket League',          'Esporte',   'PC',          2015,   0.00, 20),
('Hades',                  'Roguelike', 'Switch',      2020,  47.49,  4),
('Need for Speed Heat',    'Corrida',   'PlayStation', 2019,  89.90,  0),
('Undertale',              'RPG',       'PC',          2015,  19.99,  9),
('Cuphead',                'Plataforma','Xbox',        2017,  36.99,  2),
('Subway Surfers',         'Corrida',   'Mobile',      2012,   0.00, 30),
('Dead Cells',             'Roguelike', 'PC',          2018,  47.49,  6),
('Pac-Man',                'Arcade',    'Mobile',      1980,   9.90,  1);
