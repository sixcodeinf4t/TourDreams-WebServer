<?php

    class HotelQuarto

    {
        public function SelectHotel(){
            $sql = "select h.hotel,h.checkin,h.checkout,h.qtdEstrelas,h.descricao,l.logradouro,l.numero,b.bairro,c.cidade,e.estado,e.uf
                    from tbl_hotel as h
                    inner join tbl_logradouro as l
                    on h.idLogradouro = l.idLogradouro
                    inner join tbl_bairro as b
                    on l.idBairro = b.idBairro
                    inner join tbl_cidade as c
                    on b.idCidade = c.idCidade
                    inner join tbl_estado as e
                    on c.idEstado = e.idEstado
                    where h.idHotel =".$this->idHotel.";";
            $select=mysql_query($sql);

            $cont = 0;

            while($rs=mysql_fetch_array($select)){

                $lstHotel[] = new HotelQuarto();

                $lstHotel[$cont]->hotel = $rs['hotel'];
                $lstHotel[$cont]->checkin = $rs['checkin'];
                $lstHotel[$cont]->checkout = $rs['checkout'];
                $lstHotel[$cont]->qtdEstrelas = $rs['qtdEstrelas'];
                $lstHotel[$cont]->descricao = $rs['descricao'];
                $lstHotel[$cont]->logradouro = $rs['logradouro'];
                $lstHotel[$cont]->numero = $rs['numero'];
                $lstHotel[$cont]->bairro = $rs['bairro'];
                $lstHotel[$cont]->cidade = $rs['cidade'];
                $lstHotel[$cont]->uf = $rs['uf'];


                $cont++;

            }
            return $lstHotel;
        }

        public function SelectImagem(){
            $sql = "select i.caminhoImagem
                	from tbl_imagem as i
                	inner join tbl_hotelimagem as hi
                	on i.idImagem = hi.idImagem
                	inner join tbl_hotel as h
                	on hi.idHotel = h.idHotel
                	where hi.idHotel =".$this->idHotel.";";


            $select=mysql_query($sql);

            $cont = 0;

            while($rs=mysql_fetch_array($select)){

                $lstImagem[] = new HotelQuarto();
                $lstFirstImg[] = new HotelQuarto();

                $lstImagem[$cont]->caminhoImagem = $rs['caminhoImagem'];

                $cont++;

            }
            return $lstImagem;

        }

        public function SelectFirstImagem(){
            $sql = "select i.caminhoImagem
                	from tbl_imagem as i
                	inner join tbl_hotelimagem as hi
                	on i.idImagem = hi.idImagem
                	inner join tbl_hotel as h
                	on hi.idHotel = h.idHotel
                	where hi.idHotel =".$this->idHotel." limit 1;";


            $select=mysql_query($sql);

            $cont = 0;

            while($rs=mysql_fetch_array($select)){

                $lstFirstImg[] = new HotelQuarto();

                $lstFirstImg[0]->firstImg = $rs['caminhoImagem'];

                $cont++;

            }
            return $lstFirstImg;

        }

        public function SelectComodidadesHotel(){
            $sql = "select c.nomeComodidade
            from tbl_comodidadeshotel as c
            inner join tbl_hotelcomodidadeshotel as hc
            on c.idComodidadeHotel = hc.idComodidadeHotel
            inner join tbl_hotel as h
            on hc.idHotel = h.idHotel
            where hc.status = 1 and hc.idHotel=".$this->idHotel.";";

            $select=mysql_query($sql);

            $cont = 0;

            while($rs=mysql_fetch_array($select)){
                $listComodidade[] = new HotelQuarto();

                $listComodidade[$cont]->comodidadeHotel=$rs['nomeComodidade'];

                $cont++;

            }
            return $listComodidade;
        }


        public function SelectComodidadesQuarto(){
            $sql = "select c.nomeComodidade
            from tbl_comodidadesquarto as c
            inner join tbl_quartocomodidadesquarto as qc
            on c.idComodidade = qc.idComodidade
            inner join tbl_quarto as q
            on qc.idQuarto = q.idQuarto
            where qc.status = 1 and qc.idQuarto=".$this->idQuarto.";";

            $select=mysql_query($sql);

            $cont = 0;

            while($rs=mysql_fetch_array($select)){
                $listComodidade[] = new HotelQuarto();

                $listComodidade[$cont]->comodidadeQuarto=$rs['nomeComodidade'];

                $cont++;

            }
            return $listComodidade;
        }

        public function SelectQuarto(){
            $sql = "select q.idQuarto,q.nome,q.descricao,q.valorDiario,i.caminhoImagem
                    from tbl_quarto as q
                    inner join tbl_imagem as i
                    on q.idImagem = i.idImagem
                    where idHotel=".$this->idHotel.";";

            $select=mysql_query($sql);

            $cont = 0;

            while($rs=mysql_fetch_array($select)){
                $listQuarto[] = new HotelQuarto();

                $listQuarto[$cont]->nomeQuarto=$rs['nome'];
                $listQuarto[$cont]->idQuarto=$rs['idQuarto'];
                $listQuarto[$cont]->descricao=$rs['descricao'];
                $listQuarto[$cont]->vlrDiario=$rs['valorDiario'];
                $listQuarto[$cont]->caminhoImagem=$rs['caminhoImagem'];
                // $listQuarto[$cont]->comodidadeQuarto=$rs['nomeComodidade'];

                $cont++;

            }
            return $listQuarto;
        }

    }

?>
