#Insert USUARIO
INSERT INTO `USUARIO` (`email`, `password`, `nombre`) VALUES
('admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'Administrator');
INSERT INTO `USUARIO` (`email`, `password`, `nombre`) VALUES
('user@user.com', 'c6865cf98b133f1f3de596a4a2894630', 'User');

#Insert EVENTO
INSERT INTO `EVENTO` (`uuid`, `nombre`,`emailUser`) VALUES ('15bd56afedfad2', 'evento 1','admin@admin.com');