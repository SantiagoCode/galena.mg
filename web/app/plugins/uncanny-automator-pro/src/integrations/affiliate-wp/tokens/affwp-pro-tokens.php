<?php

namespace Uncanny_Automator_Pro;

use Uncanny_Automator\Affwp_Tokens;

/**
 * Class Affwp_Pro_Tokens
 * @package Uncanny_Automator_Pro
 */
class Affwp_Pro_Tokens extends Affwp_Tokens {

	/** Integration code
	 * @var string
	 */
	public static $integration = 'AFFWP';

	public function __construct() {
		add_filter( 'automator_maybe_trigger_affwp_affwppaidreferral_tokens', [
			$this,
			'affwp_possible_affiliate_ref_tokens'
		], 20, 2 );

		add_filter( 'automator_maybe_trigger_affwp_affwprejectreferral_tokens', [
			$this,
			'affwp_possible_affiliate_ref_tokens'
		], 20, 2 );

		add_filter( 'automator_maybe_trigger_affwp_referswcproduct_tokens', [
			$this,
			'affwp_possible_affiliate_ref_pro_tokens'
		], 20, 2 );

		add_filter( 'automator_maybe_trigger_affwp_refersmpproduct_tokens', [
			$this,
			'affwp_possible_affiliate_ref_pro_tokens'
		], 20, 2 );

		add_filter( 'automator_maybe_trigger_affwp_referseddproduct_tokens', [
			$this,
			'affwp_possible_affiliate_ref_pro_tokens'
		], 20, 2 );

		add_filter( 'automator_maybe_parse_token', [ $this, 'parse_affwp_pro_trigger_tokens' ], 20, 6 );
	}

	/**
	 * @param array $tokens
	 * @param array $args
	 *
	 * @return array
	 */
	public function affwp_possible_affiliate_ref_pro_tokens( $tokens = [], $args = [] ) {
		if ( ! automator_pro_do_identify_tokens() ) {
			return $tokens;
		}

		$trigger_integration = $args['integration'];
		$trigger_meta        = $args['meta'];

		$fields = [
			[
				'tokenId'         => 'AFFILIATEWPID',
				'tokenName'       => __( 'Affiliate ID', 'uncanny-automator' ),
				'tokenType'       => 'text',
				'tokenIdentifier' => $trigger_meta,
			],
			[
				'tokenId'         => 'AFFILIATEWPURL',
				'tokenName'       => __( 'Affiliate URL', 'uncanny-automator' ),
				'tokenType'       => 'text',
				'tokenIdentifier' => $trigger_meta,
			],
			[
				'tokenId'         => 'AFFILIATEWPSTATUS',
				'tokenName'       => __( 'Affiliate status', 'uncanny-automator' ),
				'tokenType'       => 'text',
				'tokenIdentifier' => $trigger_meta,
			],
			[
				'tokenId'         => 'AFFILIATEWPREGISTERDATE',
				'tokenName'       => __( 'Registration date', 'uncanny-automator' ),
				'tokenType'       => 'text',
				'tokenIdentifier' => $trigger_meta,
			],
			[
				'tokenId'         => 'AFFILIATEWPWEBSITE',
				'tokenName'       => __( 'Website', 'uncanny-automator' ),
				'tokenType'       => 'text',
				'tokenIdentifier' => $trigger_meta,
			],
			[
				'tokenId'         => 'AFFILIATEWPREFRATETYPE',
				'tokenName'       => __( 'Referral rate type', 'uncanny-automator' ),
				'tokenType'       => 'text',
				'tokenIdentifier' => $trigger_meta,
			],
			[
				'tokenId'         => 'AFFILIATEWPREFRATE',
				'tokenName'       => __( 'Referral rate', 'uncanny-automator' ),
				'tokenType'       => 'text',
				'tokenIdentifier' => $trigger_meta,
			],
			[
				'tokenId'         => 'AFFILIATEWPCOUPON',
				'tokenName'       => __( 'Dynamic coupon', 'uncanny-automator' ),
				'tokenType'       => 'text',
				'tokenIdentifier' => $trigger_meta,
			],
			[
				'tokenId'         => 'AFFILIATEWPACCEMAIL',
				'tokenName'       => __( 'Account email', 'uncanny-automator' ),
				'tokenType'       => 'text',
				'tokenIdentifier' => $trigger_meta,
			],
			[
				'tokenId'         => 'AFFILIATEWPPAYMENTEMAIL',
				'tokenName'       => __( 'Payment email', 'uncanny-automator' ),
				'tokenType'       => 'text',
				'tokenIdentifier' => $trigger_meta,
			],
			[
				'tokenId'         => 'AFFILIATEWPPROMOMETHODS',
				'tokenName'       => __( 'Promotion methods', 'uncanny-automator' ),
				'tokenType'       => 'text',
				'tokenIdentifier' => $trigger_meta,
			],
			[
				'tokenId'         => 'AFFILIATEWPNOTES',
				'tokenName'       => __( 'Affiliate notes', 'uncanny-automator' ),
				'tokenType'       => 'text',
				'tokenIdentifier' => $trigger_meta,
			],
			[
				'tokenId'         => 'REFERRALTYPE',
				'tokenName'       => __( 'Referral type', 'uncanny-automator' ),
				'tokenType'       => 'text',
				'tokenIdentifier' => $trigger_meta,
			],
			[
				'tokenId'         => 'REFERRALAMOUNT',
				'tokenName'       => __( 'Referral amount', 'uncanny-automator' ),
				'tokenType'       => 'text',
				'tokenIdentifier' => $trigger_meta,
			],
			[
				'tokenId'         => 'REFERRALDATE',
				'tokenName'       => __( 'Referral date', 'uncanny-automator' ),
				'tokenType'       => 'text',
				'tokenIdentifier' => $trigger_meta,
			],
			[
				'tokenId'         => 'REFERRALDESCRIPTION',
				'tokenName'       => __( 'Referral description', 'uncanny-automator' ),
				'tokenType'       => 'text',
				'tokenIdentifier' => $trigger_meta,
			],
			[
				'tokenId'         => 'REFERRALREFERENCE',
				'tokenName'       => __( 'Referral reference', 'uncanny-automator' ),
				'tokenType'       => 'text',
				'tokenIdentifier' => $trigger_meta,
			],
			[
				'tokenId'         => 'REFERRALCONTEXT',
				'tokenName'       => __( 'Referral context', 'uncanny-automator' ),
				'tokenType'       => 'text',
				'tokenIdentifier' => $trigger_meta,
			],
			[
				'tokenId'         => 'REFERRALCUSTOM',
				'tokenName'       => __( 'Referral custom', 'uncanny-automator' ),
				'tokenType'       => 'text',
				'tokenIdentifier' => $trigger_meta,
			],
			[
				'tokenId'         => 'REFERRALSTATUS',
				'tokenName'       => __( 'Referral status', 'uncanny-automator' ),
				'tokenType'       => 'text',
				'tokenIdentifier' => $trigger_meta,
			],
		];

		$tokens = array_merge( $tokens, $fields );

		return $tokens;
	}

	/**
	 * @param $value
	 * @param $pieces
	 * @param $recipe_id
	 * @param $trigger_data
	 * @param int $user_id
	 * @param $replace_args
	 *
	 * @return int|mixed|string
	 */
	public function parse_affwp_pro_trigger_tokens( $value, $pieces, $recipe_id, $trigger_data, $user_id, $replace_args ) {
		if ( $pieces ) {
			if ( in_array( 'WCSALES', $pieces ) ||
			     in_array( 'MPSLES', $pieces ) ||
			     in_array( 'EDDSLES', $pieces ) ||
			     in_array( 'REFERSMPPRODUCT', $pieces ) ||
			     in_array( 'REFERSEDDPRODUCT', $pieces ) ||
			     in_array( 'REFERSWCPRODUCT', $pieces ) ||
			     in_array( 'REFERRALTYPE', $pieces )
			) {
				global $wpdb;
				$trigger_id     = $pieces[0];
				$trigger_meta   = $pieces[2];
				$trigger_log_id = isset( $replace_args['trigger_log_id'] ) ? absint( $replace_args['trigger_log_id'] ) : 0;
				$entry          = $wpdb->get_var( "SELECT meta_value
													FROM {$wpdb->prefix}uap_trigger_log_meta
													WHERE meta_key = '{$trigger_meta}'
													AND automator_trigger_log_id = {$trigger_log_id}
													AND automator_trigger_id = {$trigger_id}
													LIMIT 0,1" );

				$value = maybe_unserialize( $entry );
			}
		}

		return $value;
	}

}
