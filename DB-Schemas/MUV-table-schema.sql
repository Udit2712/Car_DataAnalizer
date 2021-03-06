CREATE TABLE muv_data(
  ID_Number INTEGER NOT NULL PRIMARY KEY,
  Make VARCHAR(13) NOT NULL,
  Model VARCHAR(33) NOT NULL,
  Variant VARCHAR(38) NOT NULL,
  ExShowroom_Price INTEGER NOT NULL,
  Fuel_Type VARCHAR(12) NOT NULL,
  Fuel_Tank_Capacity_in_Litres VARCHAR(5) NOT NULL,
  capacity_points INTEGER NOT NULL,
  Displacement_in_cc INTEGER NOT NULL,
  displacement_points INTEGER NOT NULL,
  Cylinders INTEGER NOT NULL,
  No_of_cylinder_points INTEGER NOT NULL,
  Valves_Per_Cylinder INTEGER NOT NULL,
  Valve_point INTEGER NOT NULL,
  Emission_Norm_in_BS VARCHAR(3) NOT NULL,
  emission_points INTEGER NOT NULL,
  ARAI_Certified_Mileage_in_kmlitre NUMERIC(5, 2),
  ARAI_Mileage_Points_liquid INTEGER NOT NULL,
  ARAI_Certified_Mileage_for_CNG_in_kmkg NUMERIC(5, 2) NOT NULL,
  ARAI_Mileage_Points_CNG INTEGER NOT NULL,
  Front_Brakes VARCHAR(15) NOT NULL,
  front_break_points INTEGER NOT NULL,
  Rear_Brakes VARCHAR(15) NOT NULL,
  rear_break_points INTEGER NOT NULL,
  Power_Steering VARCHAR(17) NOT NULL,
  power_steering_point INTEGER NOT NULL,
  Power_Windows VARCHAR(18) NOT NULL,
  power_window_point INTEGER NOT NULL,
  Odometer VARCHAR(15) NOT NULL,
  odometer_point INTEGER NOT NULL,
  Speedometer VARCHAR(15) NOT NULL,
  speedometer_point INTEGER NOT NULL,
  Tripmeter VARCHAR(3) NOT NULL,
  tripmeter_point INTEGER NOT NULL,
  Seats_Material VARCHAR(12) NOT NULL,
  seat_material_point INTEGER NOT NULL,
  Type VARCHAR(9) NOT NULL,
  type_point INTEGER NOT NULL,
  Audio_system VARCHAR(35) NOT NULL,
  audio_system_point INTEGER NOT NULL,
  Bluetooth VARCHAR(3) NOT NULL,
  bluetooth_point BIT NOT NULL,
  Boot_Space_in_L VARCHAR(5) NOT NULL,
  Boot_Space_points INTEGER NOT NULL,
  Fuellid_Opener VARCHAR(35) NOT NULL,
  Fuellid_opener_point INTEGER NOT NULL,
  Bootlid_Opener VARCHAR(29) NOT NULL,
  Bootlid_Opener_points INTEGER NOT NULL,
  Fuel_Gauge VARCHAR(15) NOT NULL,
  Fuel_Guage_points INTEGER NOT NULL,
  Low_Fuel_Warning VARCHAR(3) NOT NULL,
  Low_Fuel_Warning_point BIT NOT NULL,
  Ventilation_System VARCHAR(81) NOT NULL,
  Ventilation_system_points INTEGER NOT NULL,
  Cruise_Control VARCHAR(3) NOT NULL,
  Cruise_Control_points BIT NOT NULL,
  Airbags VARCHAR(263) NOT NULL,
  Airbags_point INTEGER NOT NULL,
  Power_in_PS NUMERIC(9, 5) NOT NULL,
  Power_Points INTEGER NOT NULL,
  torque_in_NM NUMERIC(6, 2) NOT NULL,
  Torque_points INTEGER NOT NULL,
  POINT_SUM INTEGER NOT NULL,
  torque_in_NM_old NUMERIC(6, 2) NOT NULL,
  Drivetrain VARCHAR(23) NOT NULL,
  Cylinder_Configuration VARCHAR(13) NOT NULL,
  Torque VARCHAR(20) NOT NULL,
  Engine_Location VARCHAR(20) NOT NULL,
  Fuel_System VARCHAR(13) NOT NULL,
  Height_in_MM NUMERIC(7, 3) NOT NULL,
  Length_in_MM NUMERIC(6, 2) NOT NULL,
  Width_in_MM NUMERIC(7, 3) NOT NULL,
  Body_Type VARCHAR(19),
  Doors INTEGER,
  City_Mileage_in_kmlitre VARCHAR(9),
  Power VARCHAR(17) NOT NULL,
  Highway_Mileage_in_kmlitre VARCHAR(7),
  Kerb_Weight_in_kg VARCHAR(9),
  Gears VARCHAR(27),
  Ground_Clearance_in_MM NUMERIC(5, 1),
  Front_Suspension VARCHAR(195),
  Rear_Suspension VARCHAR(157),
  Front_Track_in_MM VARCHAR(46),
  Rear_Track_in_MM VARCHAR(21),
  Front_Tyre VARCHAR(54),
  Rim_WR VARCHAR(54),
  RIMS_CORRECT VARCHAR(10),
  Rear_Tyre_Rim VARCHAR(54),
  Power_Seats VARCHAR(16),
  Keyless_Entry VARCHAR(17),
  RPM_PS VARCHAR(7) NOT NULL,
  Tachometer VARCHAR(20),
  Seating_Capacity INTEGER,
  Wheelbase VARCHAR(7),
  Wheels_Size VARCHAR(54),
  Start_Stop_Button VARCHAR(10),
  12v_Power_Outlet VARCHAR(3),
  Auxin_Compatibility VARCHAR(35),
  Average_Fuel_Consumption VARCHAR(42),
  Basic_Warranty VARCHAR(63),
  CD_MP3_DVD_Player VARCHAR(3),
  Central_Locking VARCHAR(3),
  Child_Safety_Locks VARCHAR(7),
  Clock VARCHAR(15),
  Cup_Holders VARCHAR(26),
  Distance_to_Empty VARCHAR(12),
  Door_Pockets VARCHAR(19),
  Engine_Malfunction_Light VARCHAR(138),
  Extended_Warranty VARCHAR(138),
  FM_Radio VARCHAR(3),
  Handbrake VARCHAR(9),
  Instrument_Console VARCHAR(16),
  Minimum_Turning_Radius VARCHAR(11),
  Multifunction_Display VARCHAR(24),
  Sun_Visor VARCHAR(24),
  Third_Row_AC_Vents VARCHAR(31),
  AutoDimming_RearView_Mirror VARCHAR(3),
  Hill_Assist VARCHAR(3),
  Gear_Indicator VARCHAR(3),
  3_Point_SeatBelt_in_Middle_Rear_Seat VARCHAR(3),
  Ambient_Lightning VARCHAR(3),
  CargoBoot_Lights VARCHAR(3),
  Drive_Modes VARCHAR(39),
  Engine_Immobilizer VARCHAR(3),
  High_Speed_Alert_System VARCHAR(3),
  Lane_Watch_Camera_Side_Mirror_Camera VARCHAR(3),
  Passenger_Side_SeatBelt_Reminder VARCHAR(3),
  Seat_Back_Pockets VARCHAR(3),
  Voice_Recognition VARCHAR(3),
  Walk_Away_Auto_Car_Lock VARCHAR(3),
  A_Antilock_Braking_System VARCHAR(3),
  Headlight_Reminder VARCHAR(9),
  Adjustable_Headrests VARCHAR(21),
  Gross_Vehicle_Weight VARCHAR(53),
  Door_Ajar_Warning VARCHAR(3),
  EBD_Electronic_Brakeforce_Distribution VARCHAR(3),
  Fasten_Seat_Belt_Warning VARCHAR(3),
  Gear_Shift_Reminder VARCHAR(3),
  Number_of_Airbags INTEGER,
  Compression_Ratio VARCHAR(12),
  Adjustable_Steering_Column VARCHAR(11),
  Other_Specs VARCHAR(254),
  Other_specs2 VARCHAR(249),
  Parking_Assistance VARCHAR(77),
  Key_Off_Reminder VARCHAR(12),
  USB_Compatibility VARCHAR(3),
  Android_Auto VARCHAR(3),
  Apple_CarPlay VARCHAR(3),
  Cigarette_Lighter VARCHAR(15),
  Infotainment_Screen VARCHAR(28),
  Multifunction_Steering_Wheel VARCHAR(53),
  Average_Speed VARCHAR(28),
  EBA_Electronic_Brake_Assist VARCHAR(19),
  Seat_Height_Adjustment VARCHAR(31),
  Navigation_System VARCHAR(17),
  Second_Row_AC_Vents VARCHAR(3),
  Tyre_Pressure_Monitoring_System VARCHAR(3),
  Rear_Center_Armrest VARCHAR(27),
  iPod_Compatibility VARCHAR(3),
  ESP_Electronic_Stability_Program VARCHAR(3),
  Cooled_Glove_Box VARCHAR(3),
  Recommended_Tyre_Pressure VARCHAR(13),
  Heated_Seats VARCHAR(10),
  Turbocharger VARCHAR(3),
  ISOFIX_ChildSeat_Mount VARCHAR(3),
  Rain_Sensing_Wipers VARCHAR(3),
  Paddle_Shifters VARCHAR(3),
  Leather_Wrapped_Steering VARCHAR(3),
  Automatic_Headlamps VARCHAR(3),
  Engine_Type VARCHAR(145),
  ASR_Traction_Control VARCHAR(11),
  USB_Ports INTEGER,
  HeadsUp_Display VARCHAR(3),
  Welcome_Lights VARCHAR(4),
  Battery VARCHAR(85),
  Electric_Range VARCHAR(40)
);

INSERT INTO
  muv_data
SELECT
  *
FROM
  Cars_data
WHERE
  Body_Type = 'MUV';