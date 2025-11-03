<?php

add_shortcode('mj_form_contato', 'mj_form_contato');

function mj_form_contato($post)
{

    $output = '<form action="' . get_permalink($post) . '" method="POST" class="mb-4">';

		$output .= '<div class="form-group">';

			$output .= '<div class="row">';
				$output .= '<div class="col-sm-6">';
					$output .= '<label for="nome"><strong>Nome:</strong></label>';
					$output .= '<input id="nome" name="nome" class="form-control" value="" placeholder="Digite seu nome" />';
				$output .= '</div>';

				$output .= '<div class="col-sm-6">';
					$output .= '<label for="email"><strong>E-mail:</strong></label>';
					$output .= '<input id="email" name="email" class="form-control" value="" placeholder="Digite seu e-mail" />';
				$output .= '</div>';
			$output .= '</div>';
			
		$output .= '</div>';

		$output .= '<div class="form-group">';

			$output .= '<div class="row">';
				$output .= '<div class="col-sm-6">';
					$output .= '<label for="telefone"><strong>Telefone:</strong></label>';
					$output .= '<input id="telefone" name="telefone" class="form-control" value="" placeholder="Digite seu telefone" />';
				$output .= '</div>';
			$output .= '</div>';
			
		$output .= '</div>';

		$output .= '<div class="form-group">';

			$output .= '<div class="row">';

				$output .= '<div class="col-sm-12">';
					$output .= '<label for="mensagem"><strong>Mensagem:</strong></label>';
					$output .= '<textarea rows="6" id="mensagem" name="mensagem" class="form-control" value="" placeholder="Digite sua mensagem"></textarea>';
				$output .= '</div>';

			$output .= '</div>';
			
		$output .= '</div>';

		$output .= '<div class="form-group">';

			$output .= '<div class="row">';

				$output .= '<div class="col-sm-12">';
					$output .= '<button id="enviar_form_contato" class="btn btn-lg btn-success">Enviar</button>';
				$output .= '</div>';

			$output .= '</div>';
			
		$output .= '</div>';

		$output .= '<div class="row" id="result_form_contato"></div>';
		
	$output .= '</form>';

	return $output;
}