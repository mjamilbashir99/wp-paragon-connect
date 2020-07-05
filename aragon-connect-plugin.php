<?php
/**
 * Plugin Name: Aragon Connect
 * Plugin URI: 
 * Description: Aragon Connect.
 * Version: 1.0
 * Author: Jamil Bashir
 * Author URI: 
 */

import { connect } from '@aragon/connect'

// Initiates the connection to an organization
const org = await connect('example.aragonid.eth', 'thegraph')

// Fetch the apps belonging to this organization
const apps = await org.apps()

apps.forEach(console.log)