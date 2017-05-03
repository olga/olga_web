<?php
$pfd_base = "Theoretical cross-country distance given updraft velocity and height. Some corrections are applied: we can't all fly like Kawa, so a pilot efficiency factor of 75% is included. Furthermore, the cross-country velocity is decreased with 50% when updraft height < 800m, and set to zero for updraft height < 500m. At the moment (Feb 2015), this is still being tuned.<br/><br/>";


$var_description = array(
  "swd"         => "\"Synthetic\" cloud fraction, calculated as the amount of incoming shortwave radiation divided by the maximum incoming radiation",
  "rain"        => "Accumulated precipitation over the last hour",
  "wind10m"     => "10m wind speed and direction",
  "wind1000m"   => "1000m wind speed and direction",
  "pfd_ventus"  => "$pfd_base This specific PFD is calculated using the uncorrected updraft height <i>(\"Thermal depth\")</i> using w* <i>(\"Thermal velocity (w*)\")</i> for the updraft velocity.",
  "pfd_cirrus"  => "$pfd_base This specific PFD is calculated using the uncorrected updraft height (\"Thermal depth\") using w* (\"Thermal velocity (w*)\") for the updraft velocity.",
  "pfd2_ventus"  => "$pfd_base This specific PFD is calculated using the corrected updraft height (\"Thermal depthi (usable)\") using the TEMF updraft velocity (\"Thermal velocity (TM)\").",
  "pfd2_cirrus"  => "$pfd_base This specific PFD is calculated using the corrected updraft height (\"Thermal depthi (usable)\") using the TEMF updraft velocity (\"Thermal velocity (TM)\").",
  "zidry"       => "Height of the updrafts (dry boundary layer top, or cloud base), not accounting for glider sink",
  "ziglider"    => "Height of the updrafts (dry boundary layer top, or cloud base), accounting for sink of glider",
  "wglider"     => "Updraft velocity calculated as w* (convective velocity scale)",
  "wgliderTEMF" => "Updraft velocity from TEMF scheme",
  "cudepth"     => "Depth of the cumulus layer, from TEMF",
  "tser"        => "NOTE: Updraft velocity is uncorrected for sink of glider!",
  "sound"       => "Sounding"
);
